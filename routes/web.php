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


Route::get('/', 'ContentfulController@index');

Route::get('/web', function () {
    return view('map/batas');
});

Route::get('/about', function () {
    return view('oxygen/about');
});

Route::get('/contact', function () {
    return view('oxygen/contact');
});

Route::get('/struktur', 'StrukturController@index');

Route::get('/blog', 'ContentfulController@blog');
Route::get('/blog/{slug}', 'ContentfulController@post');

Route::get('/kelompok', 'KelompokController@index');
Route::get('/kelompok/{slug}', 'KelompokController@show');

Route::get('/kak', 'StaticController@kak');

Route::get('/kegiatan', 'KegiatanController@index');
Route::get('/hidrografi', 'KegiatanController@hidrografi');
Route::get('/gnss', 'KegiatanController@gnss');
Route::get('/fotogrametri', 'KegiatanController@fotogrametri');
Route::get('/topografi', 'KegiatanController@topografi');

Route::get('/gallery', 'ContentfulController@gallery');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes([
    'register' => false,
]);

Route::get('/home', 'HomeController@index')->name('home');
