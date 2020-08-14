<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function(){
    return view('about');
});
 
Route::get('/pizzas', 'PizzaController@index')->name('pizzas.index')->middleware('auth');

Route::get('/pizzas/create', 'PizzaController@create')->name('pizzas.create');

Route::post('/pizzas', 'PizzaController@store')->name('pizzas.store');

Route::delete('/pizzas/{id}', 'PizzaController@destroy')->name('pizzas.destroy')->middleware('auth');

Route::get('/pizzas/{id}', 'PizzaController@show')->name('pizzas.show')->middleware('auth');


Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
