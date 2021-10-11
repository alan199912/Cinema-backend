<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cinema;
use App\Models\Schedule;

class CinemaController extends Controller
{
    public function getAllCinemas()
    {
        $cinemas = Cinema::all();
        $schedules = Schedule::all();

        foreach ($cinemas as &$cinema) {
            $cinema->schedules = $schedules;
        }

        try {
            $userAuth = auth()->userOrFail();

            if (!$userAuth) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'cinemas' => $cinemas
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }
}
