<?php

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


Route::view('/admin', 'admin');
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/profile', 'profile');
Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');



