<?php


//var_dump(\Yii::$app->params); // params
//var_dump(\Yii::$app->defaultRoute); // site => site/actionIndex
//echo 'defaultRoute'; // defaultRoute
//var_dump(\Yii::$app->cache); // Yii::$app->ComponentID

//\Yii::$app->mytest->sayHi(); // 非 bootstrap 组件，只会进行一次实例化操作
//\Yii::$app->mytest->sayHi();

/**
 * 预定义变量注释
 * @var $msg app\controllers\ViewStudyController
 * @var $a app\controllers\ViewStudyController
 *
 * <!--    <h1>--><? //= Html::encode($this->title) ?><!--</h1>-->
 * <!--    <div>study</div>-->
 * <!--    <div>--><? //= isset($msg) ? Html::encode($msg) : "" ?><!--</div>-->
 *
 * <!--危险-->
 * <!--    <div>--><? //= $a ?><!--</div>-->
 * <!--转纯文本显示-->
 * <!--    <div>--><? //= isset($a) ? Html::encode($a) : "" ?><!--</div>-->
 * <!--html 输出，性能不佳-->
 * <!--    <div>--><? //= HtmlPurifier::process($a) ?><!--</div>-->
 *
 * <!--视图中渲染其它视图-->
 * <? //= $this->render('index') ?>
 */

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$this->title = '通过 this 访问';

$this->params['study-text'] = '由 views/site/study.php 传递';

// 视图事件
//\Yii::$app->view->on(\yii\web\View::EVENT_END_BODY, function () {
//    echo date('Y-m-d');
//});
?>


<!--<div>study</div>-->
<div>This is controller ID is: <?= $this->context->id ?></div>
