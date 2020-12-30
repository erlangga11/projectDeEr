<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','DashboardController@Dashboard');
Auth::routes();
Route::get('/user','UserController@User');
Route::post('/user/update/{id}','UserController@update');
Route::get('/absensi/{NID}','AbsensiController@Absensi');
Route::get('/matkul','MatkulController@Matkul');
