<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('buahKakao.index');
});

Route::get('buah/create', 'KakaoController@create');
Route::post('buah', 'KakaoController@store');
Route::get('tabel', 'KakaoController@index');
Route::get('buah/{id}/del', 'KakaoController@destroy');
Route::get('buah/{id}/edit', 'KakaoController@edit');

Route::put('buah/{id}', 'KakaoController@update');

Route::get('tanam/create', 'TanamController@create');
Route::post('tanam', 'TanamController@store');
Route::get('tanam', 'TanamController@show');
Route::get('tanam/{id}/del', 'TanamController@destroy');
Route::get('tanam/{id}/edit', 'TanamController@edit');
Route::put('tanam/{id}', 'TanamController@update');

Route::get('panen', 'PanenController@show');
Route::get('panen/{id}', 'PanenController@detail');

Route::get('informasibuah', 'InformasiBuahController@show');

Route::get('penggudangan', 'PenggudanganController@index');
Route::post('penggudangan', 'PenggudanganController@store');
Route::get('penggudangan/create', 'PenggudanganController@create');

Route::get('produksi/create', 'ProduksiController@create');
Route::post('produksi', 'ProduksiController@store');
Route::get('produksi', 'ProduksiController@show');
Route::get('produksi/{id}/del', 'ProduksiController@destroy');
Route::get('produksi/{id}/edit', 'ProduksiController@edit');
Route::put('produksi/{id}', 'ProduksiController@update');
// ajaxproduksi
Route::get('buah/{id}', 'KakaoController@show');
Route::get('penggudangan/{id}', 'PenggudanganController@show');

Route::get('hasilolahan', 'HasilolahanController@index');
Route::get('hasilolahan/{id}', 'HasilolahanController@show');

Route::get('pemesanan/create', 'PemesananController@create');
Route::post('pemesanan', 'PemesananController@store');
Route::get('pemesanan', 'PemesananController@show');
Route::get('pemesanan/{id}', 'PemesananController@edit');
Route::get('pemesanan/validasi/{id}', 'PemesananController@validasi');
Route::get('validasiPemesanan', 'PemesananController@showValidasi');



