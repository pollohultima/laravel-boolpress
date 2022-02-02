<?php

use App\Http\Resources\PostResource;
use App\Models\Post;
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

Route::get('/', 'PageController@index')->name('home');

Route::get('contacts', 'ContactController@show_contact_page')->name('contacts');

Route::post('contacts', 'ContactController@store')->name('contacts.send');

Route::post('contacts', 'Admin\ContactController@reply')->name('contacts.reply');

Route::resource('products', ProductController::class)->only([
    'index', 'show'
]);
Route::resource('posts', PostController::class)->only([
    'index', 'show'
]);

Route::get('posts/{post}', function (Post $post) {
    return new PostResource(Post::find($post));
});

Route::get('categories/{category:slug}/posts', 'CategoryController@posts')->name('categories.posts');


Route::get('tags/{tag:slug}/posts', 'TagController@posts')->name('tags.posts');


//categories/{category}/posts -> categorycontroller

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {

    Route::get('/', 'HomeController@index')->name('index');

    Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('contacts', ContactController::class);
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