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

Route::group([
    'prefix' => 'dogger',
    'namespace' => 'Cracki\Dogger\Http\Controllers'
], function () {
    Route::get('/', 'DoggerController@index')->name("dogger.index");
    Route::any('/search', 'DoggerController@search')->name("dogger.search");
    Route::delete('/delete', 'DoggerController@delete')->name("dogger.delete");
});


