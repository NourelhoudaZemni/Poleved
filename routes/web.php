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





Route::resource("/event", EventController::class);
Route::resource('/location', LocationController::class);
Route::resource('/velo', VeloController::class);
Route::resource('/type', TypeController::class);

Route::resource('/contactus', ContactUsController::class);


Route::view('/','welcome');
Route::view('/admin', 'admin.admin');
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/profile', 'profile');
Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');

route::get('/view_category', [AdminController::class, 'view_category']);



route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/delete_balade/{id}', [AdminController::class, 'delete_balade']);


route::get('/view_balade', [AdminController::class, 'view_balade']);


route::post('/ajouter_balade', [AdminController::class, 'ajouter_balade']);


route::get('/update_balade/{id}', [AdminController::class, 'update_balade']);

route::get('/All_Balades', [BaladeClientController::class, 'All_Balades']);

route::post('/update_balade_confirm/{id}', [BaladeClientController::class, 'update_balade_confirm']);
Route::resource("/balade", BaladeClientController::class);
