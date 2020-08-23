<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','LoginController@login');
Route::post('login_act','LoginController@login_act');
Route::get('home','LoginController@home');
Route::get('/isi1',function () { return view('isi1'); });
Route::get('/isi2',function () { return view('isi2'); });
Route::get('dashboard','DashboardController@index');
Route::get('barang','MasterController@barang_view');
Route::post('barang_act','MasterController@barang_act');
Route::get('barang_tambah','MasterController@barang');
Route::get('barang_edit/{idbar}','MasterController@barang_upform');
Route::post('barang_upd','MasterController@barang_upd');
Route::get('barang_hapus/{idbar}','MasterController@barang_del');