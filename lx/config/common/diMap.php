<?php

return [
    'interfaces' => [
        lx\ModelManagerInterface::class => lx\model\ModelManager::class,
        lx\ResourceVoterInterface::class => lx\auth\RbacResourceVoter::class,
	],
    'classes' => [

    ],
];
