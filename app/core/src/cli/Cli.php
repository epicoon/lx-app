<?php

namespace app\cli;

use lx;
use lx\CliProcessor;
use lx\FusionComponentInterface;
use lx\FusionComponentTrait;
use lx\ServiceCliInterface;
use lx\auth\models\Role;
use lx\auth\RbacAuthorizationGate;

class Cli implements FusionComponentInterface, ServiceCliInterface
{
    use FusionComponentTrait;

    public function getCliCommandsConfig(): array
    {
        return [
            [
                'command' => ['create-admin'],
                'description' => 'Creates admin user',
                'handler' => function (CliProcessor $processor) {
                    $login = $processor->getParam('login');
                    if (!$login) {
                        $processor->in('login', 'Enter login: ', ['decor' => 'b']);
                        return;
                    }

                    $password = $processor->getParam('password');
                    if (!$password) {
                        $processor->in('password', 'Enter password: ', ['decor' => 'b'], true);
                        return;
                    }

                    $passwordConfirmation = $processor->getParam('passwordConfirmation');
                    if (!$passwordConfirmation) {
                        $processor->in('passwordConfirmation', 'Confirm password: ', ['decor' => 'b'], true);
                        return;
                    }

                    if ($password != $passwordConfirmation) {
                        $processor->dropParam('password');
                        $processor->dropParam('passwordConfirmation');
                        $processor->outln('Confirmation failed');
                        return;
                    }

                    $user = lx::$app->userManager->createUser($login, $password);
                    $roles = Role::find([
                        'name' => ['superadmin', 'admin', 'client'],
                    ]);
                    (new RbacAuthorizationGate())->setUserRoles($user, $roles);
                    $processor->outln('Done');
                },
            ],
        ];
    }
}
