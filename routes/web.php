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

Route::get('/', 'Guest\PageController@index')->name('home');
/* Route::get('/collections/spada-laser', 'Guest\LightsablerContoller@spada_laser')->name('spada.standard');
Route::get('/collections/spada-laser-legendary', 'Guest\LightsablerContoller@legendary')->name('spada.legendary'); */

Auth::routes(['register' => false]);


Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'HomeController@index')->name('dashbard');
    Route::resource('lightsabers', LightsaberController::class);
});
