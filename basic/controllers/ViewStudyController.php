<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ViewStudyController extends Controller
{
//    // 独立动作
//    // 1. 渲染静态页面
//    public function actions()
//    {
//        return [
//            'page' => [
//                'class' => 'yii\web\ViewAction',
//            ]
//        ];
//    }

    public function actionIndex()
    {
//        return $this->render('/site/study', [
//            'msg' => '来源于 controller',
//            'a' => '<a href="https://www.baidu.com">危险跳转</a>'
//        ]);
//        return $this->renderPartial('/site/study'); // 不携带布局

        // 任何地方都可以使用 Yii view 组件的形式调用渲染方法
        // 不携带 layout
//        echo Yii::$app->view->render('@app/views/site/study.php');


        return $this->render('/site/study', [
            'msg' => '来源于 controller'
        ]);
    }


}