<?php

Route::get('storefinder', function(){
	echo 'Hello from the storefinder package!';
});

Route::get('add/{a}/{b}', 'Zplan\Storefinder\StorefinderController@add');
Route::get('subtract/{a}/{b}', 'Zplan\Storefinder\StorefinderController@subtract');