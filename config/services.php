<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
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

    'google' => [
        'client_id' => env ( 'G_CLIENT_ID' ),
        'client_secret' => env ( 'G_CLIENT_SECRET' ),
        'redirect' => env ( 'G_REDIRECT' )
    ],

    'facebook' => [
        'client_id' => env ( 'FB_CLIENT_ID' ),
        'client_secret' => env ( 'FB_CLIENT_SECRET' ),
        'redirect' => env ( 'FB_REDIRECT' )
    ],

    'instagram' => [
        'client_id' => env('INSTAGRAM_KEY'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect' => env('INSTAGRAM_REDIRECT_URI')
    ],

    'elastic_email' => [
    	'key' => env('ELASTIC_KEY'),
    	'account' => env('ELASTIC_ACCOUNT')
    ],
    'sendgrid' => [
        'api_key' => env('SENDGRID_API_KEY'),
        // 'endpoint' => 'https://admin.likemedia.club/mail',
    ],

];
