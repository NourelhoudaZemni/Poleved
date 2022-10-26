<?php

use App\Http\Controllers\BaladesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EventssController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\PostsController;
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

//Auth

Route::resource('/contactus', ContactUsController::class);
Route::resource("sponsor", SponsorController::class);
Route::resource("event", EventssController::class);
Route::resource('location', LocationController::class);
Route::resource('velo', VeloController::class);
Route::resource('type', TypeController::class);
Route::resource('balades', BaladesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('posts', PostsController::class);

//Authentification routes



//Client
Route::get('/OurBikes', [VeloController::class, 'OurBikes']);
Route::get('/OurEvents', [EventssController::class, 'OurEvents'])->name('OurEvents');
Route::get('/YourLocations', [LocationController::class, 'indexF'])->name('YourLocations');
Route::get('/OurBalades', [BaladesController::class, 'OurBalades'])->name('OurBalades');
Route::get('/OurPosts', [PostsController::class, 'OurPosts'])->name('OurPosts');

Route::view('/','welcome');
Route::view('/admin', 'admin.admin');
//Route::view('/login', 'login');
//Route::view('/signup', 'signup');
Route::view('/profile', 'profile');
Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
