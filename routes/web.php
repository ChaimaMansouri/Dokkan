<?php


Route::get('/','RegionController@index')->name('home');
Route::post('/uploadPhoto','ArtisanController@upload_photo');
Route::post('/store/{id}','ArtisanController@store');
Route::post('/storeType','TypeController@store');
Route::get('/profil/{id}','ArtisanController@getProfil');