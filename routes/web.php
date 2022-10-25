<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EventssController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VeloController;
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




Route::resource("sponsor", SponsorController::class);
Route::resource("/event", EventssController::class);
Route::resource('/location', LocationController::class);
Route::resource('/velo', VeloController::class);
Route::resource('/type', TypeController::class);
//FrontEnd
Route::get('/OurBikes', [VeloController::class, 'OurBikes']);
Route::get('/OurEvents', [EventssController::class, 'OurEvents'])->name('OurEvents');
Route::get('/YourLocations', [LocationController::class, 'indexF'])->name('YourLocations');

Route::resource('/contactus', ContactUsController::class);


Route::view('/','welcome');
Route::view('/admin', 'admin.admin');

Route::view('/profile', 'profile');
Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');








//Route::view('/login', 'login');
Route::view('/register', 'register');
Route::post('/register',[RegController::class,'__invoke'],'registerUser')->name('register');
//Route::post('/login',[LoginController::class,'__invoke'],'login')->name('login');
