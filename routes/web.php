<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CinemaController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::post('/auth/register', [AuthController::class, 'register']);
// Route::post('/auth/login', [AuthController::class, 'login']);


// Route::get('/api/v1/movies', [MovieController::class, 'getAllMovies']);

// Route::get('/api/v1/cinema', [CinemaController::class, 'getAllCinema']);

// // Route::get('/api/v1/getUserByEmail', [UserController::class, 'getUserByEmail']);

// Route::post('/api/v1/order', [OrderController::class, 'generatePurchaseOrder']);
