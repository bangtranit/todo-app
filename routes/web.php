<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodoController@index')->name('todos');
