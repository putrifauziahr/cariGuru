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
Route::get('login/admin', 'LoginAdminController@login')->name('login/admin');
Route::post('loginAdminPost', 'LoginAdminController@loginPost')->name('loginAdminPost');
Route::get('register/admin', 'LoginAdminController@register')->name('reister/admin');
Route::post('registerAdminPost', 'LoginAdminController@registerPost')->name('registerAdminPost');

//GURU
Route::get('dashboard_guru', 'GuruController@dashboard_guru')->name('dashboard_guru');
//======profil=========
Route::get('profil_guru', 'GuruController@profil_guru')->name('profil_guru');
Route::match(['get', 'post'], 'guru/updateProfil', 'GuruController@updateProfil')->name('guru/updateProfil');
Route::match(['get', 'post'], 'guru/updateFotoProfil', 'GuruController@updateFotoProfil')->name('guru/updateFotoProfil');
//======biodata========
Route::get('guru/showBiodata', 'GuruController@biodata')->name('guru/showbBiodata');
Route::get('guru/showBio', 'GuruController@showBiodata')->name('guru/showbBio');
Route::match(['get', 'post'], 'guru/editBiodata', 'GuruController@editBiodata')->name('guru/editBiodata');
Route::get('guru/createBiodata', 'GuruController@createBiodata')->name('guru/createBiodata');
Route::post('guru/postCreateBiodata', 'GuruController@postCreateBiodata')->name('guru/postCreateBiodata');

//MURID
Route::get('dashboard_murid', 'MuridController@dashboard_murid')->name('dashboard_murid');
Route::get('profil_murid', 'MuridController@profil_murid')->name('profil_murid');



Auth::routes();
Auth::routes(['verify' => true]);
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');


// Route::get('/home_user', 'RegistrationController@index')->name('home_user');
// Route::get('/login', 'RegistrationController@login')->name('login');
// Route::post('/loginPost', 'RegistrationController@loginPost')->name('loginPost');
// Route::get('/register', 'RegistrationController@register')->name('register');
// Route::post('/registerPost', 'RegistrationController@registerPost')->name('registerPost');
// Route::get('/logout', 'RegistrationController@logout');