<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/user/create', [UserController::class, 'create']);
Route::get('/user/{user}', [UserController::class, 'show']);
Route::post('/user', [UserController::class,  'store']);
Route::get('/user', [UserController::class,  'index']);
Route::get('/user/{user}/edit', [UserController::class,  'edit']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'destory']);