<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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
Route::resource('home', AppController::class)->middleware('auth');
Route::get('/',[AppController::class,'index'])->middleware('auth')->name('home');

Route::get('create',[AppController::class,'create'])->middleware('auth')->name('create');
Route::post('create',[AppController::class,'store'])->middleware('auth');

Route::get('show',[AppController::class,'show'])->middleware('auth')->name('show');

Route::get('register',[RegisterController::class,'index'])->middleware('guest')->name('register');
Route::post('register',[RegisterController::class,'save'])->middleware('guest');

Route::get('login',[LoginController::class,'index'])->middleware('guest')->name('login');
Route::post('login',[LoginController::class,'authenticate'])->middleware('guest');

/* menerima inputan dari logout.php, dikirim ke logincontroller fungsi logout */
Route::post('logout',[LoginController::class,'logout'])->middleware('auth');
