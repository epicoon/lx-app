<?php

return [
    'cssManager' => [
        'defaultCssPreset' => 'dark',
        'buildType' => lx\CssManager::BUILD_TYPE_ALL_TOGETHER,
    ],

    'userManager' => [
        'class' => lx\auth\UserManager::class,
        'userModel' => app\models\User::class,
        'userAuthFields' => ['login'],
        'userAuthField' => 'login',
        'publicFields' => ['login'],
    ],
];
