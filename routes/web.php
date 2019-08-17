<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about-us', 'HomeController@aboutus')->name('aboutus');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('/blog', 'HomeController@blog')->name('blog');

Auth::routes();

Route::middleware('auth')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/', 'AdminController@index')->name('index');
    Route::match(['post', 'get'], '/banners', 'AdminController@banners')->name('banners');
    Route::match(['post', 'get'], '/cmd', 'AdminController@cmd')->name('cmd');
});
