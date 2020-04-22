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


Route::get('/', 'IndexController@index');

Route::get('/web', function () {
    return view('web');
});

Route::get('/about', function () {
    return view('oxygen/about');
});

Route::get('/contact', function () {
    return view('oxygen/contact');
});

Route::get('/blog', 'BlogPostController@index');
Route::get('/blog/{slug}', 'BlogPostController@show');
Route::get('/kak', 'StaticController@kak');

Route::get('/anggota', 'AnggotaController@index');

Auth::routes([
'reset' => false, // Password Reset Routes...
'verify' => false, // Email Verification Routes...
]
);

Route::get('/home', 'HomeController@index')->name('home');
