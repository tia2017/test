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
    return view('login');
});

//Dashboard
// Route::get('/dashboard', 'Dashboard@index');
Route::get('/dashboard','DashboardController@index');
Route::get('/dashboard/donut','DashboardController@donut');

//Auth
Route::post('/auth/login', 'Auth@login');
Route::get('/logout', 'Auth@logout');

//Users
Route::get('/users', 'UserController@index');
route::get('/users/tambah', 'UserController@create');
route::post('/users/store', 'UserController@store');
Route::get('/users/edit/{id}','UserController@edit');
Route::put('/users/update/{id}','UserController@update');
Route::get('/users/hapus/{id}', 'UserController@delete');

//Roles
Route::get('/roles', 'RoleController@index');
route::get('/roles/tambah', 'RoleController@create');
route::post('/roles/store', 'RoleController@store');
Route::get('/roles/edit/{id}','RoleController@edit');
Route::put('/roles/update/{id}','RoleController@update');
Route::get('/roles/hapus/{id}', 'RoleController@delete');


//Pilars
Route::get('/pilars', 'PilarController@index');
Route::get('/pilars/tambah', 'PilarController@create');
Route::post('/pilars/store', 'PilarController@store');
Route::get('/pilars/edit/{id}','PilarController@edit');
Route::put('/pilars/update/{id}','PilarController@update');
Route::get('/pilars/hapus/{id}', 'PilarController@delete');

//Types
Route::get('/types', 'TypeController@index');
Route::get('/types/tambah', 'TypeController@create');
Route::post('/types/store', 'TypeController@store');
Route::get('/types/edit/{id}','TypeController@edit');
Route::put('/types/update/{id}','TypeController@update');
Route::get('/types/hapus/{id}', 'TypeController@delete');

// inovasi
Route::get('/inovasi','InovasiController@index');
Route::get('/inovasi/detail/{detail_info}', 'InovasiController@detail');
Route::get('/inovasi/hapus/{detail_info}','InovasiController@hapus');
Route::get('/inovasi/edit/{detail_info}','InovasiController@edit');
Route::post('/inovasi/edit','InovasiController@store');
Route::get('/inovasi/cari', 'InovasiController@search');

Route::get('/tambah-inovasi','TambahInovasiController@create');
Route::post('/tambah-inovasi','TambahInovasiController@store');

// profile
route::get('/profile/{id}', 'profileController@index');

