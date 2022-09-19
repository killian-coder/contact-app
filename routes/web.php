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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/create_a_contact', 'App\Http\Controllers\HomeController@createContact')->name('create_contact');

Route::post('/storeFormData', 'App\Http\Controllers\HomeController@storeFormData')->name('storeFormData');

