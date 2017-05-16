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

  Route::prefix('user')->group(function() {
     Route::get('/calendar', 'HomeController@calendar')->name('user.calendar');
     Route::get('/pets', 'HomeController@pets')->name('user.calendar');
  });

  Route::prefix('petshop')->group(function() {
    Route::get('/login', 'Auth\PetshopLoginController@showLoginForm')->name('petshop.login');
    Route::post('/login', 'Auth\PetshopLoginController@login')->name('petshop.login.submit');
    Route::get('/', 'PetshopController@index')->name('petshop.dashboard');
    Route::get('/services', 'ServiceController@index')->name('petshop.services');
    Route::get('/services/add', 'ServiceController@new')->name('petshop.services.add');
    Route::get('/calendar', 'PetshopController@calendar')->name('petshop.calendar');
  });
