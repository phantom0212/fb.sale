<?php

Route::group(['middleware' => 'web', 'prefix' => 'cai-dat', 'namespace' => 'Modules\Config\Http\Controllers'], function() {
    Route::group(['prefix' => '/cai-dat-chung'], function() {
        Route::get('/', 'ConfigController@listLabel')->name('setting-general');
        Route::post('/add', 'ConfigController@addLabel');
        Route::post('/delete', 'ConfigController@destroy');
        Route::post('/edit', 'ConfigController@update');
        Route::post('/update', 'ConfigController@setting');
    });
    Route::get('/thong-ke', 'ConfigController@statitic');
    Route::post('/thong-ke/message', 'ConfigController@chartmessage');
    Route::post('/thong-ke/order', 'ConfigController@chartorder');
});
