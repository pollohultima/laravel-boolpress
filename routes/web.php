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

Route::get('/', function () {
    return view('guest.welcome');
})->name('home');

Route::resource('products', ProductController::class)->only([
    'index', 'show'
]);
Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
});

/*

Routes : sever routes (posts/learn-laravel)

Model: Post


Migrazione: posts

-title (Learn Laravel)
-slug (learn-laravel)
-sub_title
-body

Seeder

Controllers: admin/guest

Table: categories
-id
-name
-slug
*/