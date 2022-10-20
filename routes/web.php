<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BaladeController;
use App\Http\Controllers\AdminController;
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

route::get('/view_category', [AdminController::class, 'view_category']);

 

route::post('/add_category', [AdminController::class, 'add_category']);

route::get('/delete_category/{id}', [AdminController::class, 'delete_category']);

route::get('/delete_balade/{id}', [AdminController::class, 'delete_balade']);

Route::resource("/balade", BaladeController::class);

route::get('/view_balade', [AdminController::class, 'view_balade']);


route::post('/ajouter_balade', [AdminController::class, 'ajouter_balade']); 

route::get('/show_balade', [AdminController::class, 'show_balade']);


