<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUserById($id)
    {
        $user = User::where('id', $id)->get()->first();

        try {
            $userAuth = auth()->userOrFail();

            if (!$userAuth) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success', 'user' => $user
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }
}
