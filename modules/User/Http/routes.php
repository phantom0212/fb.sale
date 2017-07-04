<?php
Route::group(['middleware' => 'web', 'prefix' => '/', 'namespace' => 'Modules\User\Http\Controllers'], function () {
    Route::get('/', 'UserController@index');
    Route::post('login', 'UserController@employeeLogin');
    Route::get('logout', 'UserController@employeeLogout');
    Route::get('api', 'UserController@decryptUser');
    Route::get('/encrypt', function () {
        if (\Illuminate\Support\Facades\Session::has('user')) {
            $secret_email = \Illuminate\Support\Facades\Crypt::encrypt(session()->get('email') . '|' . session()->get('password') . '|' . session()->get('user_id') . '|' . time());
            return redirect()->to(env('DOMAIN_CHAT') . 'chat?key=' . $secret_email);
        } else {
            return redirect()->to('/');
        }
    })->name('encrypt-chat');
    Route::get('/apilogin', 'UserController@apiLogin');
});

Route::group(['middleware' => 'web', 'namespace' => 'Modules\User\Http\Controllers'], function () {
    Route::post('/login-social', 'UserController@SocialLogin')->name('login-social');
    Route::get('/call-back/login-social', 'UserController@SocialLoginCallBack')->name('login-social-call-back');
});




