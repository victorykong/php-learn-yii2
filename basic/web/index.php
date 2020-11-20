<?php
/**
 * 1. 引导启动阶段 & 入口文件
 * 2. 每处理一个请求都会触发该文件的二次执行
 */

use yii\web\Application;

// defined('YII_DEBUG'): false
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

// 注册 Composer 自动加载器
require __DIR__ . '/../vendor/autoload.php';
// 包含 Yii 类文件
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// 加载应用事件
$eventConf = require __DIR__ . '/../config/onEventName.php';

// 加载应用配置
$config = require __DIR__ . '/../config/web.php';

// 创建、配置、运行一个应用
$app = new Application(array_merge($config, $eventConf));
$exitCode = $app->run();
// exit($exitCode);
