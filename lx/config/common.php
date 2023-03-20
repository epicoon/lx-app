<?php

return [
    'localConfig' => '@site/config/main.php',

    // Directories for services
    'serviceCategories' => [
        'project' => [
            'app',
            'services',
        ],
        'dependencies' => [
            'vendor',
        ],
    ],

    'aliases' => [
        'services' => '@site/services',
        'temp' => '@site/lx/.system/temp',
    ],

    // Application components
    'components' => require_once(__DIR__ . '/common/components.php'),

    // DI processot map
    'diProcessor' => require_once(__DIR__ . '/common/diMap.php'),

    // Default services config
    'serviceConfig' => require_once(__DIR__ . '/common/service.php'),

    // Default plugins config
    'pluginConfig' => require_once(__DIR__ . '/common/plugin.php'),
];
