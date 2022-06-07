<?php

Route::get('agricultores','\App\Http\Controllers\api\AgricultorController@getAllAgricultores');
Route::get('agricultores/{id}','\App\Http\Controllers\api\AgricultorController@getAgricultorById');
Route::post('agricultores','\App\Http\Controllers\api\AgricultorController@saveAgricultor');
Route::delete('agricultores/{id}','\App\Http\Controllers\api\AgricultorController@deleteById');