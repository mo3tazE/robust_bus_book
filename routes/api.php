<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FleetController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

 
Route::group(['prefix' => 'fleet', 'as' => 'fleet.'], function () {
    Route::post('/listSeats', [FleetController::class, 'listSeats'])->name('listSeats');
    Route::post('/book', [FleetController::class, 'book'])->name('book');

    // Add more routes related to the fleet within this group
});