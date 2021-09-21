<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome', ["title" => ""]);
});

Route::post('/postLogin', 'AuthController@postlogin' );


Route::get('/dashboard',[AdminController::class,'dashboard']);
Route::get('/chart', [AdminController::class, 'chart']);
Route::get('/Admin-Login',[AdminController::class,'adminlogin']);
Route::get('/Tabel-Member', [AdminController::class, 'membertabel']);
Route::get('/Member', [AdminController::class, 'memberstatus']);