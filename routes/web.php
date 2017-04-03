<?php



Route::get('/','RegionController@index');

Route::post('/uploadPhoto','ArtisanController@upload_photo');
Route::post('/store','ArtisanController@store');
