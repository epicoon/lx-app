<?php

return lx\ArrayHelper::mergeRecursiveDistinct(
    require_once(__DIR__ . '/common.php'),
    [
        'components' => require_once(__DIR__ . '/console/components.php'),
    ],
    true
);
