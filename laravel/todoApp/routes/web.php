<?php

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', function (){
	return view('index');
});

Route::post('/tasks', 'TasksController@insert');

Route::patch('/task/{id}', 'TasksController@update');

Route::patch('/tasks/{id}', 'TasksController@delete');

?>