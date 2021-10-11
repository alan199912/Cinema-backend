<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return response()->json(
            [
                'status' => 'success',
                'token' => $this->respondWithToken($token),
                'user' => auth()->user()
            ],
            200
        );
        // return $this->respondWithToken($token);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {

        auth()->logout();

        return response()->json(['status' => 'success', 'message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => (auth()->factory()->getTTL() * 60) * 24
        ]);
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $user = User::create(array_merge(
            $validator->validate(),
            ['password' => bcrypt($request->password)]
        ));

        return response()->json([
            'status' => 'success',
            'user' => $user
        ], 201);
    }
}


// namespace App\Http\Controllers;

// use App\Http\Requests\RegisterRequest;
// use App\Http\Requests\LoginRequest;
// use App\Models\User;
// use Error;
// use Exception;

// use Illuminate\Http\Response;

// class AuthController extends Controller
// {
//     public function register(RegisterRequest $request)
//     {
//         $user = User::create($request->all());
//         return ['status' => 200, 'user' => $user];
//     }

//     public function login(LoginRequest $request)
//     {

//         try {
//             $user = User::where('email', $request->email)->where('password', $request->password)->get()->first();

//             if (!$user) {
//                 abort(500, 'User not found');
//             }

//             return ['status' => 200, 'user' => $user];
//         } catch (Exception $e) {
//             return ['status' => 500, 'message' => $e->getMessage()];
//         }
//     }
// }
