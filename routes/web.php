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
    return view('oxygen/index');
});

Route::get('/blog', 'BlogPostController@index');
Route::get('/blog/{slug}', 'BlogPostController@show');

Route::get('/anggota', 'KelompokController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
