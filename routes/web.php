<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FindController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// 

Route::get('/login', function () {
    return view('login');
});
  
Auth::routes();

Route::get('auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);
Route::post('/home', [App\Http\Controllers\HomeController::class, 'search']);

Route::get('/tie', function () {
    return view('test');
});