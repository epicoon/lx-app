<?php

namespace app\plugins\admin\server;

use lx\auth\RbacResourceInterface;
use lx\Plugin as lxPlugin;
use lx\Resource;

class Plugin extends lxPlugin implements RbacResourceInterface
{
    public function getPermissions(): array
    {
        return [
            Resource::DEFAULT_RESOURCE_METHOD => ['admin_w', 'admin_r'],
        ];
    }
}
