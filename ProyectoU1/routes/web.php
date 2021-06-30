<?php
use Illuminate\Support\Facades\Route;

/* --RUTAS-- */
Route::group(['prefix'=>'inicio','as'=>'inicio.'], function(){
    Route::get('/', function () {
        return view('layouts.inicio');
    });
});

Route::group(['prefix'=>'usuarios','as'=>'usuarios.'], function(){
    Route::get('/', function () {
        return view('layouts.users');
    });      
});
Route::group(['prefix'=>'shopping','as'=>'shopping.'], function(){
    Route::get('/', function () {
        return view('layouts.shop');
    });      
});
Route::group(['prefix'=>'inventario','as'=>'inventario.'], function(){
    Route::get('/', function () {
        return view('layouts.inventario');
    });      
});
Route::group(['prefix'=>'login','as'=>'login.'], function(){
    Route::get('/', function () {
        return view('passwords.login');
    });      
});
Route::group(['prefix'=>'register','as'=>'register.'], function(){
    Route::get('/', function () {
        return view('passwords.register');
    });      
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
