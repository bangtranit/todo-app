<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodoController@index')->name('todos');
Route::get('todos/{todo}', 'TodoController@show')->name('todos.show');