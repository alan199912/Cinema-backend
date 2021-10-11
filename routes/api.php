<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::get('me', [AuthController::class, 'me']);
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'v1'

], function ($router) {

    Route::get('getUserById/{id}', [UserController::class, 'getUserById']);
    // Route::get('/api/v1/getUserByEmail', [UserController::class, 'getUserByEmail']);

    Route::get('getAllMovies', [MovieController::class, 'getAllMovies']);
    Route::get('getMovieById/{id}', [MovieController::class, 'getMovieById']);
    Route::post('addMovie', [MovieController::class, 'addMovie']);
    Route::put('updateMovie/{id}', [MovieController::class, 'updateMovie']);
    Route::delete('deleteMovie/{id}', [MovieController::class, 'deleteMovie']);

    Route::get('getAllCinemas', [CinemaController::class, 'getAllCinemas']);


    Route::post('generatePurchaseOrder', [OrderController::class, 'generatePurchaseOrder']);
    Route::get('getOrderByUser/{id}', [OrderController::class, 'getOrderByUser']);
    Route::get('getOrderById/{id}', [OrderController::class, 'getOrderById']);

    Route::get('getScheduleByMoVieId/{id}', [ScheduleController::class, 'getScheduleByMoVieId']);
    Route::get('getScheduleById/{id}', [ScheduleController::class, 'getScheduleById']);
    Route::post('addSchedule', [ScheduleController::class, 'addSchedule']);
    Route::put('updateSchedule/{id}', [ScheduleController::class, 'updateSchedule']);
    Route::delete('deleteSchedule/{id}', [ScheduleController::class, 'deleteSchedule']);
});
