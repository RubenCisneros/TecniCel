<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use \Illuminate\Support\Facades\Auth;


use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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
    return view('index');
})->name('home');

Route::view('/about','about')->name('about');

Route::view('/login', 'auth.login')->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::get('/logout', function(){
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::resource('categories', CategoryController::class);
