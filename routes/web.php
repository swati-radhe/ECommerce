<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;

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
    return view('register');
});
// Route::get('/register','RegisterController@getRegister');
// Route::post('/postregister','RegisterController@postRegister');
Route::get('/login',[LoginController::class,'getLogin']);
Route::post('/signin',[LoginController::class,'postLogin']);

Route::get('/register',[RegisterController::class,'getRegister']);
Route::post('/signup',[RegisterController::class,'postRegister']);

Route::get('/getproduct',[ProductController::class,'index']);

