<?php

return [
    'settings' => [
        'displayErrorDetails' => env('DISPLAY_ERRORS', 'false'),
        'cache' => env('CACHE_VIEWS', 'false'),
        'db' => [
            'driver' => env('DB_CONNECTION', 'mysql'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'slim'),
            'username' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',

        ],
    ]
];
