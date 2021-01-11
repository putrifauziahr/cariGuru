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
Route::get('data_guru', 'AdminController@data_guru')->name('dataguru');
Route::get('data_les', 'AdminController@data_les')->name('data_les');
Route::get('data_murid', 'AdminController@data_murid')->name('data_murid');
Route::get('data_admin', 'AdminController@data_admin')->name('data_admin');

//GURU
Route::get('dashboard_guru', 'GuruController@dashboard_guru')->name('dashboard_guru');
Route::get('profil_guru', 'GuruController@profil_guru')->name('profil_guru');
Route::get('rating_guru', 'GuruController@rating_guru')->name('rating_guru');
Route::get('jadwal_guru', 'GuruController@jadwal_guru')->name('jadwal_guru');
Route::get('murid_les', 'GuruController@murid_les')->name('murid_les');


//MURID
Route::get('dashboard_murid', 'MuridController@dashboard_murid')->name('dashboard_murid');
Route::get('profil_murid', 'MuridController@profil_murid')->name('profil_murid');

//MURID UMUM
Route::get('murid_home', 'MuridHomeController@home')->name('murid_home');
Route::get('murid_home_guru', 'MuridHomeController@guru')->name('murid_home_guru');

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


// Route::get('/home_user', 'RegistrationController@index')->name('home_user');
// Route::get('/login', 'RegistrationController@login')->name('login');
// Route::post('/loginPost', 'RegistrationController@loginPost');
// Route::get('/register', 'RegistrationController@register')->name('register');
// Route::post('/registerPost', 'RegistrationController@registerPost');
// Route::get('/logout', 'RegistrationController@logout');
