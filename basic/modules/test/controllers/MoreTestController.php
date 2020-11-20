<?php

namespace app\modules\test\controllers;


use yii\web\Controller;
use app\modules\test\Module;

class MoreTestController extends Controller
{
    public function actionSayHi()
    {

//        访问模块
//        $module = Module::getInstance();
//        echo $module->id;
//        var_dump($module->params);
//        return $this->render('/sayHi');


//        $module = \Yii::$app->getModule('test');
//        var_dump($module->params);

//        $module = \Yii::$app->controller->module;
//        var_dump($module->params);

        return $this->render('/sayHi');
    }

    public function actionTestRequest()
    {
        return json_encode([
            "name" => "vic"
        ]);
    }
}