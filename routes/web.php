<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'main@index')->name('home');

Route::get('/login' ,function(){
    return view('login');
})->name('login');
Route::post('/login' , 'login@login')->name('login');
Route::get('/signup' ,function(){
    return view('signup');
})->name('signup');

Route::post('/register' , 'register@signup')->name('register');
Route::get('/logout' , function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');
Route::get('/get/properties' , 'main@getproperty')->name('get.property');