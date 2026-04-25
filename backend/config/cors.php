<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    | This allows your Cloudflare Pages frontend to call this Laravel API.
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => [
        'https://*.pages.dev',          // Cloudflare Pages (any subdomain)
        'http://167.71.193.120',        // Droplet itself
        'http://167.71.193.120:8080',   // Droplet port 8080
        'http://localhost',
        'http://127.0.0.1',
        'null',
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
