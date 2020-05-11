<?php

use Illuminate\Routing\Router;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'Homecontroller@index')->name('index');
Route::get('/about.html', 'About\\AboutController@about')->name('about');
Route::get('/category.html', 'Category\\CategoryController@category')->name('category');
Route::get('/detail.html', 'Category\\CategoryController@detail')->name('detail');
Route::get('/trending.html', 'Trending\\TrendingController@trending')->name('trending');
Route::get('/contact.html', 'Contact\\ContactController@contact')->name('contact');
