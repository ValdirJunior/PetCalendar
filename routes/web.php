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
     Route::get('/pets', 'PetController@index')->name('user.pets');
     Route::get('/pets/add', 'PetController@create')->name('user.pets.add');
     Route::post('/pets/add', 'PetController@store')->name('user.pets.submit');
  });

  Route::prefix('petshop')->group(function() {
    Route::get('/login', 'Auth\PetshopLoginController@showLoginForm')->name('petshop.login');
    Route::post('/login', 'Auth\PetshopLoginController@login')->name('petshop.login.submit');
    Route::get('/', 'PetshopController@index')->name('petshop.dashboard');
    Route::get('/services', 'ServiceController@index')->name('petshop.services');
    Route::get('/services/add', 'ServiceController@create')->name('petshop.services.add');
    Route::post('/services/add', 'ServiceController@store')->name('petshop.services.submit');
    Route::get('/calendar', 'PetshopController@calendar')->name('petshop.calendar');

    Route::get('/register', 'Auth\PetshopRegisterController@showRegistrationForm')->name('petshop.register.form');
    Route::post('/register', 'Auth\PetshopRegisterController@create')->name('petshop.register');
  });
