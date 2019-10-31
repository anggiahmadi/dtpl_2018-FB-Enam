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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

//nove
<<<<<<< HEAD
Route::get('/packages', 'HomeController@searchPaketWisata');
Route::get('/tourism_site', 'HomeController@searchLokasiWisata');


=======
>>>>>>> 779fb8617195292f90ee91ef04981164560a92e8
Route::resource('package', 'PackageController');
Route::resource('tourism_site', 'TourismSiteController');
Route::resource('lodgement', 'LodgementController');
Route::resource('vehicle', 'VehicleController');
Route::resource('service_provider', 'ServiceProviderController');
Route::resource('about', 'AboutController');
Route::resource('contact', 'ContactController');
Route::resource('visitor', 'VisitorController');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
