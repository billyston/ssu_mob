<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'rabbitmq' => [
        'host' => env('RABBITMQ_HOST'),
        'port' => env('RABBITMQ_PORT'),
        'username' => env('RABBITMQ_USERNAME'),
        'password' => env('RABBITMQ_PASSWORD'),
        'vhost' => env('RABBITMQ_VHOST'),
    ],

    'susubox' => [
        'ssb_ussd' => [
            'base_url' => env('SSB_USSD_BASE_URL'),
            'api_key' => env('SSB_USSD_API_KEY'),
        ],
        'ssb_customer' => [
            'base_url' => env('SSB_CUSTOMER_BASE_URL'),
            'api_key' => env('SSB_CUSTOMER_API_KEY'),
        ],
        'ssb_susu' => [
            'base_url' => env('SSB_SUSU_BASE_URL'),
            'api_key' => env('SSB_SUSU_API_KEY'),
        ],
        'ssb_notification' => [
            'base_url' => env('SSB_NOTIFICATION_BASE_URL'),
            'api_key' => env('SSB_NOTIFICATION_API_KEY'),
        ],
    ],
];
