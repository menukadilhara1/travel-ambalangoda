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
        'https://your-domain.com',      // Replace with your real domain later
        'http://localhost',             // Local testing
        'http://127.0.0.1',
        'null',                         // Allows file:// for local HTML testing
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
