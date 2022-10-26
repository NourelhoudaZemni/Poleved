<?php

use App\Http\Controllers\BaladesController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\EventssController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UsersController;
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

Route::resource('contactus', ContactUsController::class);
Route::resource("sponsor", SponsorController::class);
Route::resource("event", EventssController::class);
Route::resource('location', LocationController::class);
Route::resource('velo', VeloController::class);
Route::resource('type', TypeController::class);
Route::resource('balades', BaladesController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('posts', PostsController::class);
Route::resource('comments', CommentsController::class);
Route::resource('users', UsersController::class);

//Authentification routes



//Client
Route::get('/OurBikes', [VeloController::class, 'OurBikes']);
Route::get('/OurEvents', [EventssController::class, 'OurEvents'])->name('OurEvents');
Route::get('/OurBalades', [BaladesController::class, 'OurBalades'])->name('OurBalades');
Route::get('/OurPosts', [PostsController::class, 'OurPosts'])->name('OurPosts');
Route::get('/readpost/{id}', [PostsController::class, 'readpost'])->name('readpost');
Route::get('/comment/{id}', [CommentsController::class, 'createComment'])->name('comment');

Route::view('/','welcome');

Route::view('/contact', 'contact');
Route::view('/notFound404', 'notFound404');

// Route required the authentification
Route::group(['middleware' => ['auth']], function () {

    Route::view('/admin', 'admin.admin');
    Route::view('/profile', 'profile');

    Route::get('/YourLocations', [LocationController::class, 'indexF'])->name('YourLocations');

    Route::put('updateRole/{id}',[UsersController::class, 'updateRole'])->name('updateRole');
    Route::put('addParticipant/{id}',[EventssController::class, 'addParticipant'])->name('addParticipant');
    Route::put('deleteParticipant/{id}',[EventssController::class, 'deleteParticipant'])->name('deleteParticipant');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('login',[CustomAuthController::class, 'index'])->name('login');
Route::post('postlogin',[CustomAuthController::class, 'login'])->name('postlogin');

Route::get('register', [CustomAuthController::class, 'signup'])->name('register');
Route::post('postsignup', [CustomAuthController::class, 'signupsave'])->name('postsignup');
Route::get('signout', [CustomAuthController::class, 'logout'])->name('signout');

//update role route



