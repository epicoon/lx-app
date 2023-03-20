<?php

return [
    'authenticationGate' => lx\auth\OAuth2AuthenticationGate::class,
    'authorizationGate' => lx\auth\RbacAuthorizationGate::class,

    'router' => [
        'routes' => require_once(__DIR__ . '/routes.php'),
    ],
];
