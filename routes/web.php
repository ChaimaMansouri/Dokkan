<?php


Route::get('/','RegionController@index')->name('home');
Route::post('/uploadPhoto','ArtisanController@upload_photo');
Route::post('/store','ArtisanController@store');
Route::post('/storeType','TypeController@store');
Route::get('/profil/{id}','ArtisanController@getProfil');
Route::post('/suppt','TypeController@destroy');
Route::post('/updatet','TypeController@updateType');
Route::post('/suppartisan','ArtisanController@destroy');
Route::post('/suppPhoto','ArtisanController@delete_photo');
Route::post('/getArtisan','ArtisanController@getArtisan');
Route::post('/upArtisan','ArtisanController@updateArtisan');
Route::post('/getType','ArtisanController@getype');
Route::post('/getRegion','ArtisanController@getRegion');