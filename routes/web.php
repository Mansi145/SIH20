<?php

Route::get('/', function () {
    return view('login');
})->name('login');
Route::post('/', 'Auth\LoginController@login');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/register', 'AdminController@createNewUser')->name('register');
    Route::post('/register', 'AdminController@storeNewUser')->name('create');

    Route::get('users', function () {
        return view('list_user');
    });
    Route::get('list_user_data', 'AdminController@listUsers');
});
