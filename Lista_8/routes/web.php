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

// Route::get('/', function () {
//     return view('bitcoin');
// });

Route::get('/', "BitcoinController@index");
Route::get('/bitcoin', "BitcoinController@index");
Route::get('/bitcoin/history', "BitcoinController@historyBitcoin");
Route::get('/history', "BitcoinController@historyBitcoin");
/*
Route::get('/bitcoin', "BitcoinController@index");
*/
