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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'news'], function(){
//     Route::get('', 'NewController@index')->name('news.index');
//     Route::get('/create', 'NewController@create')->name('news.create');
// });

Route::get('/{any}', function () {
    return view('new');
})->where('any', '.*');
