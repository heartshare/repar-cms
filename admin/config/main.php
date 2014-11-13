<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'admin\controllers',

    'language' => 'zh_CN',


    'aliases' => require __DIR__ . '/aliases.php',
    
    'modules' => [],
    'components' => [
        
        'view' => [

            'theme' => [
                'pathMap' => ['@admin/views' => '@themes/flat/views'],
            ],

        ],

        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
    ],
    'params' => $params,
];
