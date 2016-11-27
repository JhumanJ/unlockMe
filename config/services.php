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
    'twilio'=>[
        'accountSid' => 'AC2c000643ec0e654e7e66be3b22e29dc5',
        'apiKey'    => 'SK726a13dee646d09257cee58974a09bfc',
        'apiSecret' => '7paA1TH7G2LePl0NSO3MLpu3YKJ8Rxtl',
        'ipmServiceSid' => 'IS2d04a71e530948b0a6d30c316b64ae9a',
    ],

];
