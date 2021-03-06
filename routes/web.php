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


Route::group(['prefix' => 'news'], 
    function() {
        Route::get('/', 'News\\NewsController@listNews')->name('listNews');
        Route::post('add', 'News\\NewsController@addNews')->name('addNews');
    
});

