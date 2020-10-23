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

use Illuminate\Routing\RouteGroup;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'kegiatan'], function(){
    Route::get('index', 'ActivityController@index')->name('backend.kegiatan.index');
    Route::get('create', 'ActivityController@create')->name('backend.kegiatan.create');
    Route::post('save','ActivityController@store')->name('backend.kegiatan.save');
    Route::delete('formDelete/{activity}','ActivityController@destroy')->name('backend.kegiatan.delete');
    Route::get('show-formEdit/{activity}','ActivityController@edit')->name('backend.kegiatan.show-formEdit');
    Route::patch('update/{activity}','ActivityController@update')->name('backend.kegiatan.update');
    
});

Route::Group(['prefix' => 'users'], function(){
    Route::get('index', 'User\UserController@index')->name('users');
});

Route::group(['prefix' => 'registers'], function (){
    Route::get('index','Register\RegisterController@index')->name('registers');
    Route::get('ambil_formulir','Register\RegisterController@create')->name('register.ambil_formulir');
    Route::get('show-register','Register\RegisterController@show')->name('register.show-register');
});