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
Route::get('/', 'LandingController@index')->name('/');
Route::get('cariguru', 'LandingController@cariguru')->name('cariguru');
Route::get('informasi', 'LandingController@informasi')->name('informasi');

//ADMIN
Route::get('dashboard_admin', 'AdminController@dashboard_admin')->name('dashboard_admin');
Route::get('login/admin', 'LoginAdminController@login')->name('login/admin');
Route::post('loginAdminPost', 'LoginAdminController@loginPost')->name('loginAdminPost');
Route::get('register/admin', 'LoginAdminController@register')->name('register/admin');
Route::post('registerAdminPost', 'LoginAdminController@registerPost')->name('registerAdminPost');
//================================Profil admin============
Route::get('admin/showProfil/{id_admin}', 'AdminController@showProfil')->name('admin/showProfil');
//======================data guru=============
Route::get('admin/showDataGuru', 'AdminController@showDataGuru')->name('admin/showDataGuru');
Route::get('admin/showDetailGuru/{guru}', 'AdminController@showDetailGuru')->name('admin/showDetailGuru');
//======================data murid=============
Route::get('admin/showDataMurid', 'AdminController@showDataMurid')->name('admin/showDataMurid');
//======================data transaksi=============
Route::get('admin/showDataTrans', 'AdminController@showDataTrans')->name('admin/showDataTrans');
Route::get('admin/showDetailTrans/{trans}', 'AdminController@showDetailTrans')->name('admin/showDetailTrans');
Route::get('admin/showDataReservasi', 'AdminController@showDataReservasi')->name('admin/showDataReservasi');
Route::match(['get', 'post'], 'admin/updateDetailTrans/{id_detail}', 'AdminController@updateDetailTrans')->name('guru/updateDetailTrans');
Route::get('admin/showDataTransaksi', 'AdminController@showDataTransaksi')->name('admin/showDataTransaksi');
//======================data Les=============
Route::get('admin/showDataLes', 'AdminController@showDataLes')->name('admin/showDataLes');
Route::get('admin/showDetailLes/{dataLes}', 'AdminController@showDetailLes')->name('admin/showDetailLes');
Route::match(['get', 'post'], 'admin/postUpdateDataLes/{dataLes}', 'AdminController@postUpdateDataLes')->name('admin/postUpdateDataLes');





//GURU
Route::get('guru/dashboard_guru', 'GuruController@dashboard_guru')->name('guru/dashboard_guru');

//======profil, show profil guru, edit profil dan foto profil=========
Route::get('guru/profil_guru', 'GuruController@profil_guru')->name('guru/profil_guru');
Route::match(['get', 'post'], 'guru/updateProfil', 'GuruController@updateProfil')->name('guru/updateProfil');
Route::match(['get', 'post'], 'guru/updateFotoProfil', 'GuruController@updateFotoProfil')->name('guru/updateFotoProfil');
Route::match(['get', 'post'], 'guru/updateBerkasProfil', 'GuruController@updateBerkasProfil')->name('guru/updateBerkasProfil');

//======biodata, show biodata, tambah dan edit biodata========
Route::get('guru/showBiodata', 'GuruController@biodata')->name('guru/showBiodata');
Route::get('guru/showBio', 'GuruController@showBiodata')->name('guru/showBio');
Route::get('guru/createBiodata', 'GuruController@createBiodata')->name('guru/createBiodata');
Route::post('guru/postCreateBiodata', 'GuruController@postCreateBiodata')->name('guru/postCreateBiodata');
Route::match(['get', 'post'], 'guru/editBiodata', 'GuruController@editBiodata')->name('guru/editBiodata');

//===========les, CRUD les==============
Route::get('guru/showLesLagi', 'LesController@showLesLagi')->name('guru/showLesLagi');
Route::get('guru/showLes', 'LesController@showLes')->name('guru/showLes');
Route::get('guru/showDetailLes/{tampilkan_data}', 'LesController@showDetailLes')->name('guru/showDetailLes');
Route::get('guru/tambahLes', 'LesController@tambahLes')->name('guru/tambahLes');
Route::post('guru/postTambahLes', 'LesController@postTambahLes')->name('guru/postTambahLes');
Route::match(['get', 'post'], 'guru/postUpdateLes/{id_les}', 'LesController@postUpdateLes')->name('guru/postUpdateLes');
Route::get('guru/hapusLes/{tampilkan_data}', 'LesController@hapusLes')->name('guru/hapusLes');
//============Data Transaksi Murid=================
Route::get('guru/showDataTrans', 'GuruTransaksiController@showDataTrans')->name('guru/showDataTrans');
Route::get('guru/showDetailTrans/{data}', 'GuruTransaksiController@showDetailTrans')->name('guru/showDetailTrans');
Route::match(['get', 'post'], 'guru/updateDataTrans/{data}', 'GuruTransaksiController@updateDataTrans')->name('guru/updateDataTrans');
//==============================================================Subjek Tingkat===========
Route::get('guru/showSubjekLes', 'LesKomponenController@showSubjekLes')->name('guru/showSubjekLes');
Route::post('guru/tambahSubjekLes', 'LesKomponenController@tambahSubjekLes')->name('guru/tambahSubjekLes');
Route::get('guru/hapusSubjekLes/{subjek}', 'LesKomponenController@hapusSubjekLes')->name('guru/hapusSubjekLes');

Route::get('guru/showTingkatLes', 'LesKomponenController@showTingkatLes')->name('guru/showTingkatLes');
Route::post('guru/tambahTingkatLes', 'LesKomponenController@tambahTingkatLes')->name('guru/tambahTingkatLes');
Route::get('guru/hapusTingkatLes/{tingkat}', 'LesKomponenController@hapusTingkatLes')->name('guru/hapusTingkatLes');
//=======================================================Reservasi===========
Route::get('guru/showReservasi', 'GuruReservasiController@showReservasi')->name('guru/showReservasi');
Route::get('guru/detailReservasi/{reserv}', 'GuruReservasiController@detailReservasi')->name('guru/detailReservasi');
Route::match(['get', 'post'], 'guru/postUpdateReservasi/{id_trans}', 'GuruReservasiController@postUpdateReservasi')->name('guru/postUpdateReservasi');
//===========================Murid Les=========================
Route::get('guru/showMuridLes', 'LesController@showMuridLes')->name('guru/showMuridLes');
Route::get('guru/showDetailMurid/{murid}', 'LesController@showDetailMurid')->name('guru/showDetailMurid');
Route::match(['get', 'post'], 'guru/updateDataMurid/{murid}', 'LesController@updateDataMurid')->name('guru/updateDataMurid');





//MURID
Route::get('murid/dashboard_murid', 'MuridController@dashboard_murid')->name('murid/dashboard_murid');
//=====Profil, edit prodil, edit foto profil==================
Route::get('murid/profil_murid', 'MuridController@profil_murid')->name('murid/profil_murid');
Route::match(['get', 'post'], 'murid/updateProfil', 'MuridController@updateProfil')->name('murid/updateProfil');
Route::match(['get', 'post'], 'murid/updateFotoProfil', 'MuridController@updateFotoProfil')->name('murid/updateFotoProfil');
//=================les=======================
Route::get('murid/showDetailLes/{les}', 'MuridLesController@showDetailLes')->name('murid/showDetailLes');
Route::get('murid/showDetailGuru/{guru}', 'MuridLesController@showDetailGuru')->name('murid/showDetailGuru');
Route::get('murid/showDataLes', 'MuridLesController@showDataLes')->name('murid/showDataLes');
Route::get('murid/showDetailData/{les}', 'MuridLesController@showDetailData')->name('murid/showDetailData');
Route::match(['get', 'post'], 'murid/postUpdateDataLes/{id_detail}', 'MuridLesController@postUpdateDataLes')->name('murid/postUpdateDataLes');
//=====================Transaksi===========
Route::get('murid/showPilihLes', 'TransaksiController@showPilihLes')->name('murid/showPilihLes');
Route::get('murid/showDetailLesLagi/{trans}', 'TransaksiController@showDetailLesLagi')->name('murid/showDetailLesLagi');
Route::get('murid/showDetailTempLes/{trans}', 'TransaksiController@showDetailTempLes')->name('murid/showDetailTempLes');
Route::match(['get', 'post'], 'murid/pilihLes/{les}', 'TransaksiController@pilihLes')->name('murid/pilihLes');
Route::get('murid/hapusTempLes/{trans}', 'TransaksiController@hapusTempLes')->name('murid/hapusTempLes');
Route::match(['get', 'post'], 'murid/ubahTempLes/{trans}', 'TransaksiController@ubahTempLes')->name('murid/ubahTempLes');
//==========Pembayaran======
Route::get('murid/showPembayaran', 'TransaksiDetailController@showPembayaran')->name('murid/showPembayaran');
Route::get('murid/showDetailBayar/{detail}', 'TransaksiDetailController@showDetailBayar')->name('murid/showDetailBayar');
Route::get('murid/showDetailBayarLagi/{detail}', 'TransaksiDetailController@showDetailBayarLagi')->name('murid/showDetailBayarLagi');
Route::match(['get', 'post'], 'murid/bayarLes/{trans}', 'TransaksiDetailController@bayarLes')->name('murid/bayarLes');
Route::match(['get', 'post'], 'murid/updateBayar/{trans}', 'TransaksiDetailController@updateBayar')->name('murid/updateBayar');
Route::get('murid/showDataTrans', 'TransaksiDetailController@showDataTrans')->name('murid/showDataTrans');
Route::get('murid/buat-kadaluwarsa/{id_detail}', 'TransaksiDetailController@makeExpired')->name('murid/buat-kadaluwarsa');
Route::get('murid/hapusDetailTrans/{detail}', 'TransaksiDetailController@hapusDetailTrans')->name('murid/hapusDetailTrans');
Route::get('murid/cetak_nota/{detail}', 'TransaksiDetailController@cetak_nota')->name('murid/cetak_nota');
Route::get('murid/cari_guru', 'LandingController@cari_Guru')->name('murid/cari_Guru');


Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register/guru', 'Auth\AuthController@register')->name('register/guru');
