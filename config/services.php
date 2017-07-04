<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],
    'facebook' => [
        'client_id' => '313601012371988',
        'client_secret' => 'a993e6c800e78daf7f299f15e933b588',
        'redirect' => 'http://hoangtd.fb.sale/call-back/login-social',
    ],
//    'google' => [
//        'client_id' => '1040229422956-m604vm6360l7r2cquhl79jbck6d65b8l.apps.googleusercontent.com',
//        'client_secret' => '06r65fm3tj0B-0T_vppPeFKs',
//        'redirect' => 'http://phucnt.v2.feedy.vn/call-back/login-social?social=google',
//    ],

];
