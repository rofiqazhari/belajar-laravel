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
Route::get('dashboard',function () { return view('dashboard'); });
Route::post('login_act','LoginController@login_act');
Route::get('barang','MasterController@barang');
Route::get('kategori','MasterController@kategori');