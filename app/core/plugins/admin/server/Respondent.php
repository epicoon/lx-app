<?php

namespace app\plugins\admin\server;

use lx\Respondent as lxRespondent;
use lx;
use Exception;
use lx\HttpResponseInterface;

class Respondent extends lxRespondent
{
    public function loadPlugin($key): HttpResponseInterface
    {
        $name = null;
        switch ($key) {
            case 'doc': $name = 'lx/doc:docParser'; break;
            // ...
        }
        if (!$name) {
            return $this->prepareWarningResponse();
        }

        return $this->preparePlugin($name);
    }

    private function preparePlugin($name): HttpResponseInterface
    {
        try {
            $plugin = lx::$app->getPlugin($name);
            if (!$plugin) {
                return $this->prepareWarningResponse();
            }
        } catch (Exception $e) {
            return $this->prepareWarningResponse();
        }

        return $plugin->render();
    }
}
