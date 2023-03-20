<?php

return [
    'mode' => 'dev',

    'components' => [
        'lifeCycle' => lx\DevApplicationLifeCycleHandler::class,
        'dbConnector' => [
            'class' => 'lx\DbConnector',
            'default' => [
                'driver' => 'pgsql',
                'hostname' => 'localhost',
                'username' => '',
                'password' => '',
                'dbName' => '',
            ],
        ],
    ],

    'configInjection' => [
    ],
];
