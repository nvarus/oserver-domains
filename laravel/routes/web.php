<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', "App\Http\Controllers\MainController@login");
    Route::post('/login', "App\Http\Controllers\AuthController@postSignin");
});
Route::get('/', "App\Http\Controllers\MainController@homepage");

Route::get('/about', "App\Http\Controllers\MainController@about");

Route::get('/form', "App\Http\Controllers\MainController@form");

Route::post('/form/check', "App\Http\Controllers\MainController@form_check");


