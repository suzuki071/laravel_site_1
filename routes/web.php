<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
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

Route::get('hello/{id?}', [HelloController::class, 'index']); //ルートパラメータ
Route::get('hello2', [HelloController::class, 'index2']);
Route::get('hello3', [HelloController::class, 'index3']);
Route::post('hello3', [HelloController::class, 'post3']);

Route::get('/user',[UserController::class, 'index']);
Route::get('/user/confirm',[UserController::class, 'confirm']);
