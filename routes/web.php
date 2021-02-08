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

Route::get('/', function () { return view('Auth.login'); });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function () { return view('profile'); });




//anggota
Route::get('api/anggota', 'anggotaController@apianggota')->name('api.anggota');

Route::resource('/anggota', 'anggotaController');

Route::get('/add','anggotaController@create');

Route::post('/store','anggotaController@create')->name('store');

Route::post('/up','anggotaController@update');

Route::get('/edit/{id}','anggotaController@edit');

Route::get('/deleteData/{id}','anggotaController@destroy');

Route::get('/pdf/anggota','anggotaController@pdf')->name('agt.export');

Route::get('/excel/anggota','anggotaController@excel')->name('agt.excel');




//jenis

Route::resource('/jenis', 'jenisController');

Route::get('api/jenis', 'jenisController@apijenis')->name('api.jenis');

Route::get('/tam','jenisController@create');

Route::post('/store','jenisController@create')->name('store');

Route::get('/del/{id}','jenisController@destroy');

Route::post('/ed','jenisController@update');

Route::get('/dit/{id}','jenisController@edit');

Route::get('/pdf/jenis','jenisController@pdf')->name('jenis.export');

Route::get('/excel/jenis','jenisController@excel')->name('jenis.excel');




//buku
Route::resource('/buku', 'bukuController');

Route::get('api/buku', 'bukuController@apibuku')->name('api.buku');

Route::get('/bah','bukuController@create');

Route::post('/store','bukuController@create')->name('store');

Route::get('/let/{id}','bukuController@destroy');

Route::post('/dit','bukuController@update');

Route::get('/ed/{id}','bukuController@edit');

Route::get('/pdf/buku','bukuController@pdf')->name('buku.export');

Route::get('/excel/buku','bukuController@excel')->name('buku.excel');

// Route::get('/excelBuku','bukuController@excel');




//peminnjaman
Route::resource('/peminjaman', 'peminjamanController');

Route::get('api/peminjaman', 'peminjamanController@apipeminjaman')->name('api.peminjaman');

Route::get('/tampem','peminjamanController@create');

Route::post('/store','peminjamanController@create')->name('store');

Route::get('/hapus/{id}','peminjamanController@destroy');

Route::post('/upp','peminjamanController@update');

Route::get('/det/{id}','peminjamanController@edit');

Route::get('/pengembalian/{id}','peminjamanController@apipeminjaman');

Route::get('get-tglkmbl/{tgl_pjm}','peminjamanController@tglpbm');

Route::get('/pdf/peminjaman','peminjamanController@pdf')->name('pmj.export');

Route::get('/excel/peminjaman','peminjamanController@excel')->name('pjm.excel');




//pengembalian
Route::resource('/pengembalian', 'pengembalianController');

Route::get('api/pengembalian', 'pengembalianController@apipengembalian')->name('api.pengembalian');

Route::post('/up','pengembalianController@store');

Route::get('/dett','pengembalianController@create');

Route::get('/hp/{id}','pengembalianController@destroy');

Route::get('get-judul/{id}','pengembalianController@judul');

Route::get('/pdf/pengembalian','pengembalianController@pdf')->name('pbl.export');

Route::get('/excel/pengembalian','pengembalianController@excel')->name('pbl.excel');