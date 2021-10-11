<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{


    public function getAllMovies()
    {
        // \Illuminate\Http\Request $request
        // $token = $request->header('Authorization');

        $movie = Movie::all();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'movie' => $movie,
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function addMovie(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $movie = Movie::create(array_merge(
            $validator->validate(),
        ));

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'movie' => $movie,
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function getMovieById($id)
    {

        $movie = Movie::where('id', $id)->get()->first();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'movie' => $movie,
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function updateMovie(Request $request, $id)
    {

        $movie = Movie::where('id', $id)->get()->first();

        $validator = Validator::make($request->all(), [
            'image' => 'required',
            'name' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $movie->update($validator->validate());

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'movie' => $movie,
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function deleteMovie($id)
    {

        $movie = Movie::where('id', $id)->get()->first();

        $movie->delete();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Movie deleted successfully',
                'movie' => $movie
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }
}
