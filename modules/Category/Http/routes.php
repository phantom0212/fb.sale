<?php

Route::group(['middleware' => 'web' , 'namespace' => 'Modules\Category\Http\Controllers'], function()
{
    Route::group(['prefix' => '/chuyen-muc'], function()
    {
        Route::group(['prefix' => '/bai-viet'], function()
        {
            Route::get('/danh-sach', 'CategoryController@getList')->name('category-article');
            Route::post('/comment', 'CategoryController@hideComment')->name('hide-comment');

        });
    });

});