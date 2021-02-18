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

//UMUM
Route::get('cariguru', 'LandingController@index')->name('cariguru');

//ADMIN
Route::get('dashboard_admin', 'AdminController@dashboard_admin')->name('dashboard_admin');

//GURU
Route::get('dashboard_guru', 'GuruController@dashboard_guru')->name('dashboard_guru');

//MURID
Route::get('dashboard_murid', 'MuridController@dashboard_murid')->name('dashboard_murid');
Route::get('profil_murid', 'MuridController@profil_murid')->name('profil_murid');


// Auth::routes();
// Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


Route::get('/home_user', 'RegistrationController@index')->name('home_user');
Route::get('/login', 'RegistrationController@login')->name('login');
Route::post('/loginPost', 'RegistrationController@loginPost')->name('loginPost');
Route::get('/register', 'RegistrationController@register')->name('register');
Route::post('/registerPost', 'RegistrationController@registerPost')->name('registerPost');
Route::get('/logout', 'RegistrationController@logout');

