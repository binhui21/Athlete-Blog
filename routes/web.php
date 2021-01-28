<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create']);
Route::post('/profile', [App\Http\Controllers\ProfileController::class, 'postCreate'])->name('profile.postCreate');
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::post('/profile/{id}/update', [App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.postEdit');

Route::get('/post/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::post('/post/{id}/update', [App\Http\Controllers\PostController::class, 'postEdit'])->name('post.postEdit');
Route::post('/post/destroy', [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::resource('post', App\Http\Controllers\PostController::class);
