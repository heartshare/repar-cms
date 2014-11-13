<?php

return [

    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',

    'bootstrap' => ['log'],

    'components' => [

        'db'=> require __DIR__ . '/database.php',

        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],

        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],

        'errorHandler' => [
            'errorAction' => 'default/error',
        ],
    ],
];