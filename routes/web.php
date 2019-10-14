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

Route::resource('/kategori_artikel', 'Kategori_artikel_controller');
Route::resource('/kategori_berita', 'Kategori_berita_controller');
Route::resource('/kategori_galeri', 'Kategori_galeri_controller');
Route::resource('/kategori_pengumuman', 'Kategori_pengumuman_controller');
Route::resource('/artikel', 'artikel_controller');
Route::resource('/berita', 'berita_controller');
Route::resource('/galeri', 'galeri_controller');
Route::resource('/pengumuman', 'pengumuman_controller');

