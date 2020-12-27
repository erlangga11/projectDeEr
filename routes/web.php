<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/ex','ExampleController@Example');