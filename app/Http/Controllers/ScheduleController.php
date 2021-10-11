<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function getScheduleByMoVieId($id)
    {

        $schedules = Schedule::where('movie_id', $id)->get();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'schedules' => $schedules
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function getScheduleById($id)
    {

        $schedule = Schedule::where('id', $id)->get()->first();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'schedule' => $schedule
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function addSchedule(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'movie_id' => 'required',
            'cinema_id' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $schedule = Schedule::create(array_merge(
            $validator->validate(),
        ));


        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'schedule' => $schedule
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function updateSchedule(Request $request, $id)
    {

        $schedule = Schedule::where('id', $id)->get()->first();

        $validator = Validator::make($request->all(), [
            'movie_id' => 'required',
            'cinema_id' => 'required',
            'time' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }

        $schedule->update($validator->validate());

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'schedule' => $schedule,
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function deleteSchedule($id)
    {

        $schedule = Schedule::where('id', $id)->get()->first();

        $schedule->delete();

        try {
            $user = auth()->userOrFail();

            if (!$user) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success',
                'message' => 'Movie deleted successfully',
                'schedule' => $schedule
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }
}
