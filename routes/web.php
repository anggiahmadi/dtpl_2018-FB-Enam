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
Route::get('setup_periode', 'HomeController@setup_periode');

Route::resource('package', 'PackageController');
Route::resource('tourism_site', 'TourismSiteController');
Route::resource('lodgement', 'LodgementController');
Route::resource('vehicle', 'VehicleController');
Route::resource('service_provider', 'ServiceProviderController');
Route::resource('about', 'AboutController');
Route::resource('contact', 'ContactController');
Route::resource('visitor', 'VisitorController');
Route::resource('order', 'OrderController');

Route::get('lodgement/get_by_id/{id}', 'LodgementController@get_by_id');
Route::get('lodgement_type/get_by_id/{id}', 'LodgementController@get_type_by_id');
Route::get('tourism_site/get_by_id/{id}', 'TourismSiteController@get_by_id');
Route::get('vehicle/get_by_id/{id}', 'VehicleController@get_by_id');
Route::get('service_provider/get_by_id/{id}', 'ServiceProviderController@get_by_id');

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
