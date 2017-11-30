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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@profile');
Route::get('/category', 'CategoryController@category');
Route::get('/settings', 'SettingsController@settings');
Route::get('/blog', 'BlogController@blog');
Route::get('/users', 'UsersController@users');
Route::post('/addCategory', 'CategoryController@addCategory');
Route::post('/addBlog', 'BlogController@addBlog');

