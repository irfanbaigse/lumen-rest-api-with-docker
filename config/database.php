<?php

return [
    'default' => 'mongodb',
    'connections' => [
        'mongodb' => [
            'driver'    => 'mongodb',
            'host'      => env('MONGO_DB_HOST', 'localhost'),
            'port'      => env('MONGO_DB_PORT', 27017),
            'database'  => env('MONGO_DB_DATABASE', 'homestead'),
            'username'  => env('MONGO_DB_USERNAME', ''),
            'password'  => env('MONGO_DB_PASSWORD', ''),
            'options' => [

            ]
        ],
    ]
];
