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
    return view('pages.home.index');
});
Route::get('/test', function () {
    return view('pages.test.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/hello', 'HelloController@index')->name('hello');
Route::get('/wisata', 'DestinationController@index')->name('wisata');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/', function () {
//     return view('pages.hello.index');
// });

// Auth::routes();

// Route::get('/hello', 'HelloController@index')->name('hello');
