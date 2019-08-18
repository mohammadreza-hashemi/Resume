<?php

Auth::routes();
Route::resource('food','FoodController')->only([
    'index','show','store'
]);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');
