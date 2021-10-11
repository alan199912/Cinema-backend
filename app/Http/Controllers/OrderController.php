<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Requests\OrderRequest;
use App\Models\Schedule;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function generatePurchaseOrder(OrderRequest $request)
    {
        $order = Order::create($request->all());

        try {
            $userAuth = auth()->userOrFail();

            if (!$userAuth) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success', 'order' => $order
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function getOrderByUser($id)
    {
        $orders = Order::where('user_id', $id)->get();


        foreach ($orders as &$order) {
            // USER
            $order->user = User::where('id', $order->user_id)->get()->first();

            // SCHEDULE
            $order->schedule = Schedule::where('id', $order->schedule_id)->get()->first();


            // MOVIE
            $order->movie = Movie::where('id', $order->schedule->movie_id)->get()->first();

            // CINEMA
            $order->cinema = Cinema::where('id', $order->schedule->cinema_id)->get()->first();
        }


        try {
            $userAuth = auth()->userOrFail();

            if (!$userAuth) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success', 'orders' => $orders
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }

    public function getOrderById($id)
    {
        $order = Order::where('id', $id)->get()->first();

        // USER
        $order->user = User::where('id', $order->user_id)->get()->first();

        // SCHEDULE
        $order->schedule = Schedule::where('id', $order->schedule_id)->get()->first();


        // MOVIE
        $order->movie = Movie::where('id', $order->schedule->movie_id)->get()->first();

        // CINEMA
        $order->cinema = Cinema::where('id', $order->schedule->cinema_id)->get()->first();

        try {
            $userAuth = auth()->userOrFail();

            if (!$userAuth) {
                abort(500, 'Token invalid');
            }

            return response()->json([
                'status' => 'success', 'order' => $order
            ], 200);
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json([
                'status' => 'fail',
                'message' => 'Token invalid'
            ], 500);
        }
    }
}
