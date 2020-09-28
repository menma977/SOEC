<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'index']);

Route::group(['prefix' => 'frontEnd', 'as' => 'frontEnd.'], static function () {
  Route::get('/', [FrontController::class, 'setBackground'])->name('setBackground');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(static function () {
  Route::get('/home', 'HomeController@index')->name('home');
});