<?php

use App\Http\Controllers\Auth\FaceBookController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('auth/google', [\App\Http\Controllers\Auth\GoogleController::class,'redirectToGoogle']);
Route::get('auth/google/callback', [\App\Http\Controllers\Auth\GoogleController::class,'handleGoogleCallback']);

Route::get('auth/facebook', [FaceBookController::class, 'loginUsingFacebook'])->name('facebook.login');
Route::get('auth/facebook/callback', [FaceBookController::class, 'callbackFromFacebook'])->name('callback');


