<?php

Route::group(['middleware' => 'web', 'namespace' => 'Modules\Home\Http\Controllers'], function()
{
	Route::get('/home', 'HomeController@index');
	Route::get('/404', 'HomeController@Error404');
	Route::get('/dieu-khoan-su-dung', 'HomeController@regular');
});