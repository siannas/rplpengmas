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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//route uuntuk admin role
Route::get('/admin/home', 'HomeController@admin')->middleware('role:admin')->name('admin.home');
Route::get('/admin/register', 'Auth\RegisterAdminController@index')->name('admin.register');
Route::post('/admin/register', 'Auth\RegisterAdminController@register')->name('admin.register.post');
