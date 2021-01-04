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
Route::post('/matkul/upload/{id}','MatkulController@upload');
Route::get('/matkul/download/{id}','MatkulController@getDownload');

Auth::routes();

Route::get('/home', 'DashboardController@Dashboard')->name('homesiswa');
Route::get('/logout' ,function(){
	$logout=Auth::logout();
	return view('auth.login');
});
Route::get('/user/cetak_pdf', 'UserController@cetak_pdf');