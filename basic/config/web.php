<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'version' => '1.0',
    'name' => 'yii2学习',  // My Application
    'id' => 'victorykong-study-yii2-basic',
    'basePath' => dirname(__DIR__), // "/opt/victorykong-study/php/html/yii2/basic"
    'params' => $params,
    'defaultRoute' => 'study', // 默认为 site
    'layout' => 'layout',
//    'bootstrap' => ['log', 'mytest'], // 将会在每次处理请求前都进行实例化
    'bootstrap' => ['log'], // 将会在每次处理请求前都进行实例化
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm' => '@vendor/npm-asset',
    ],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'HW8XSUbf2dDGSgi7bqAahh9w0oruclET',
            "enableCsrfValidation" => false
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'db' => $db,

        'urlManager' => [
            'enablePrettyUrl' => true, // url 美化
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
            ],
        ],

        // 自定义组件（只会在第一次访问时实例化）
//        'mytest' => [
//            'class' => 'app\components\Test'
//        ]
        'mytest' => function () {
            return new app\components\Test();
        }


    ],


    // // 指定一个要处理所有用户请求的控制器方法
    // // 常见系统维护
    // 'catchAll' => [
    //     'offline/notice',
    //     'param1' => 'value1',
    //     'param2' => 'value2',
    // ],


    "modules" => [
        'test' => [
            'class' => 'app\modules\test\Module'
        ]
    ]
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
