<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\VeloController;
use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\BaladeController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\BaladeClientController;
  




Route::resource("/event", EventController::class);

Route::resource('/velo', VeloController::class);
Route::resource('/type', TypeController::class);



Route::view('/','welcome');
Route::view('/admin', 'admin');
Route::view('/login', 'login');
Route::view('/signup', 'signup');
Route::view('/profile', 'profile');
Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');


route::get('/view_category', [AdminController::class, 'view_category']);

route::post('/add_category', [AdminController::class, 'add_category']);
  

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/delete_balade/{id}', [AdminController::class, 'delete_balade']);
 
 
 

route::get('/update_balade/{id}', [AdminController::class, 'update_balade']); 
 
route::get('/All_Balades', [BaladeClientController::class, 'All_Balades']); 
  
route::post('/update_balade_confirm/{id}', [BaladeClientController::class, 'update_balade_confirm']); 
Route::resource("/balade", BaladeClientController::class);
 