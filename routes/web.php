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
Route::get('register/admin', 'LoginAdminController@register')->name('register/admin');
Route::post('registerAdminPost', 'LoginAdminController@registerPost')->name('registerAdminPost');



//GURU
Route::get('guru/dashboard_guru', 'GuruController@dashboard_guru')->name('guru/dashboard_guru');

//======profil, show profil guru, edit profil dan foto profil=========
Route::get('guru/profil_guru', 'GuruController@profil_guru')->name('guru/profil_guru');
Route::match(['get', 'post'], 'guru/updateProfil', 'GuruController@updateProfil')->name('guru/updateProfil');
Route::match(['get', 'post'], 'guru/updateFotoProfil', 'GuruController@updateFotoProfil')->name('guru/updateFotoProfil');
Route::match(['get', 'post'], 'guru/updateBerkasProfil', 'GuruController@updateBerkasProfil')->name('guru/updateBerkasProfil');

//======biodata, show biodata, tambah dan edit biodata========
Route::get('guru/showBiodata', 'GuruController@biodata')->name('guru/showbBiodata');
Route::get('guru/showBio', 'GuruController@showBiodata')->name('guru/showbBio');
Route::get('guru/createBiodata', 'GuruController@createBiodata')->name('guru/createBiodata');
Route::post('guru/postCreateBiodata', 'GuruController@postCreateBiodata')->name('guru/postCreateBiodata');
Route::match(['get', 'post'], 'guru/editBiodata', 'GuruController@editBiodata')->name('guru/editBiodata');

//===========les, CRUD les==============
Route::get('guru/showLes', 'LesController@showLes')->name('guru/showLes');
Route::get('guru/showDetailLes/{tampilkan_data}', 'LesController@showDetailLes')->name('guru/showDetailLes');
Route::get('guru/tambahLes', 'LesController@tambahLes')->name('guru/tambahLes');
Route::post('guru/postTambahLes', 'LesController@postTambahLes')->name('guru/postTambahLes');
Route::match(['get', 'post'], 'guru/postUpdateLes/{id_les}', 'LesController@postUpdateLes')->name('guru/postUpdateLes');
Route::get('guru/hapusLes/{tampilkan_data}', 'LesController@hapusLes')->name('guru/hapusLes');
//============Data Transaksi Murid=================
Route::get('guru/showDataTrans', 'GuruTransaksiController@showDataTrans')->name('guru/showDataTrans');



//MURID
Route::get('murid/dashboard_murid', 'MuridController@dashboard_murid')->name('murid/dashboard_murid');
//=====Profil, edit prodil, edit foto profil==================
Route::get('murid/profil_murid', 'MuridController@profil_murid')->name('murid/profil_murid');
Route::match(['get', 'post'], 'murid/updateProfil', 'MuridController@updateProfil')->name('murid/updateProfil');
Route::match(['get', 'post'], 'murid/updateFotoProfil', 'MuridController@updateFotoProfil')->name('murid/updateFotoProfil');
//=================les=======================
Route::get('murid/showDetailLes/{les}', 'MuridLesController@showDetailLes')->name('murid/showDetailLes');
Route::get('murid/showDetailGuru/{les}', 'MuridLesController@showDetailGuru')->name('murid/showDetailGuru');
//=====================Transaksi===========
Route::match(['get', 'post'], 'murid/pilihLes/{les}', 'TransaksiController@pilihLes')->name('murid/pilihLes');
Route::get('murid/hapusTempLes/{transs}', 'TransaksiController@hapusTempLes')->name('murid/hapusTempLes');
Route::match(['get', 'post'], 'murid/ubahTempLes/{transs}', 'TransaksiController@ubahTempLes')->name('murid/ubahTempLes');




Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register/guru', 'Auth\AuthController@register')->name('register/guru');
