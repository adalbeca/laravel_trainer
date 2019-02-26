<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/trainer/list', 'TrainerController@show');
Route::resource('/trainer/form', 'TrainerController@create');
Route::post('/trainer/store', 'TrainerController@store');

