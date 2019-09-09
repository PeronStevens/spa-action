<?php

return [
    'password' => false,
    'user_model' => '\App\User',
    'api_host' => env('SSO_AUTH_HOST', 'https://auth.dkbmed.com'),

    'public' => [
        'redirect' => '/',
        'custom_fields' => []
    ],
];
