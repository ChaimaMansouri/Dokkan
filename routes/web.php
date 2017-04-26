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
Route::get('/index',function(){
	return view('layouts.accueil');
});

// Admin Routes
Route::get('admin_login',function(){
    session()->reflash();
    return view('admin/admin_login');
});

Route::get('admin_profile',function(){
    session()->reflash();
    return view('admin.admin_tool');
});

Route::get('/tool','AdminController@toolAdmin');


Route::get('login','AdminController@index_login');

Route::post('admin_login','AdminController@loginAdmin');
Route::post('/admin_go','AdminController@goAdmin');
Route::post('/admin_add','AdminController@addAdmin');
Route::post('/admin_modify','AdminController@modifyAdmin');
Route::post('/admin_delete','AdminController@deleteAdmin');


// Testing Routes

Route::get('/test_admin',function(){
    return view('/tests/admin_tests');
});

Route::get('/test_admin2',function(){
    return view('/tests/admin_tests2');
});

Route::get('test_form',function(){
    return view('/layouts/login_form');
});

// Clear Admin Cookies

Route::get('clear_cookies','CookieDestroyer@clearCookies');

Route::get('login_form',function(){
    return view('admin2.login_form');
});

Route::get('pass_recovery',function(){
    return view('admin2.pass_recovery');
});