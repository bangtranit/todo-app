<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('todos', 'TodoController@index')->name('todos');
Route::get('todos/create', 'TodoController@create')->name('todos.create');
Route::get('todos/{todo}', 'TodoController@show')->name('todos.show');
Route::post('todos/store-todo', 'TodoController@store')->name('todos.store');