<?php

namespace app\sys\models;

use lx\model\Model;

/**
 * @property string $login
 * @property string $password
 */
class UserMediator extends Model
{
    public static function getServiceName(): string
    {
        return 'core';
    }

    public static function getSchemaArray(): array
    {
        return [
            'name' => 'User',
            'fields' => [
                'login' => [
                    'type' => 'string',
                    'required' => true,
                ],
                'password' => [
                    'type' => 'string',
                    'required' => true,
                ],
            ],
            'relations' => [],
        ];
    }
}
