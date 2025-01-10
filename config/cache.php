<?php
return [
    /**
     * Default cache store
     */
    'default' => 'file',

    /**
     * Default connection
     * If use file do not need to set connection
     */
    'default_connections' => 'redis',

    /**
     * Cache stores
     * expire is second
     */
    'stores' => [
        'file' => [
            'driver' => 'file',
            'path' => 'storage/cache',
            'expire' => 3600
        ],
        'redis' => [
            'driver' => 'redis',
            'expire' => 3600
        ]
    ],

    /**
     * Cache prefix
     */
    'prefix' => 'cache_',

    /**
     * Cache connections
     */
    'connections' => [
        'redis' => [
            'driver' => 'redis',
            'host' => config_env('REDIS_HOST', '127.0.0.1'),
            'port' => config_env('REDIS_PORT', '6379'),
            'username' => config_env('REDIS_USER', 'default'),
            'password' => config_env('REDIS_PASSWORD', null),
            'timeout' => 0,
            'reserved' => null,
            'retryInterval' => 0,
            'readTimeout' => 0.0,
            'expire' => 60
        ],
    ]
];