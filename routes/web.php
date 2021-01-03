<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard','DashboardController@Dashboard');
Auth::routes();
Route::get('/user','UserController@User')->name('user');
Route::post('/user/update/{id}','UserController@update');
Route::get('/absensi/{NID}','AbsensiController@Absensi');
Route::get('/matkul','MatkulController@Matkul');

Auth::routes();

Route::get('/home', 'DashboardController@Dashboard')->name('homesiswa');
Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});