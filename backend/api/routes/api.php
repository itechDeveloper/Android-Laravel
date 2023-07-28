<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Interfaces\REQUEST_TYPES_NAME;

use App\Http\Controllers\UsersController;

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

// USERS API
Route::GET(REQUEST_TYPES_NAME::GET_USERS, [UsersController::class, 'getUsers']);
Route::POST(REQUEST_TYPES_NAME::LOGIN, [UsersController::class, 'login']);