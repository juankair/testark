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

// GET | ETALASE PRODUK
Route::get('/','ProductController@etalaseProduk');


// POST | SUBMIT PRODUK
Route::post('/product/save','ProductController@submitProduk');
Route::post('/product/edit','ProductController@editProduk');
Route::post('/product/delete','ProductController@deleteProduk');