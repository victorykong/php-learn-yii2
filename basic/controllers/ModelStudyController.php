<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Study;

// yii2 默认不支持 json

class ModelStudyController extends Controller
{
    public function actionIndex()
    {
//        1. 属性标签
//        $model = new Study();
//        $model->name = 'victorykong'; // 向模型中填充数据
//        var_dump($model);

//        return $model->getAttributeLabel('name'); // Name / Your Name
//        return $model->getAttributeLabel('email'); // Email

//        2. 块赋值（传递的是一个对象怎么解析？）
        // 报错：Invalid Argument – yii\base\InvalidArgumentException
//        $model = new Study();
//        $model->attributes = Yii::$app->request->post('Study'); // 一般很少这样写，你不能保证参数绝对符合


        // 3. 场景 + 验证
//        $model = new Study();
//        $model->name = Yii::$app->request->post('name');
//        $model->email = Yii::$app->request->post('email', '');

//        // 初始化场景
//        $model = new Study();
////        $model->scenario = 'login';
//        $model->scenario = 'register';
//
//        $model->name = Yii::$app->request->post('name');
//        $model->email = Yii::$app->request->post('email', '');
//
//        if ($model->validate()) {
//            return 'success';
//        } else {
//            return $model->errors;
//        }


        echo 'tomorrow see';
    }
}