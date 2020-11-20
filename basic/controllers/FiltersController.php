<?php

namespace app\controllers;

use yii\web\Controller;

class FiltersController extends Controller
{
    public function behaviors()
    {
        return [
            [
                'class' => 'app\components\TestFilter',
                "only" => ["index",],
//                "only" => ["index", "say-hi"],
            ]
        ];
    }

    public function actionIndex()
    {
        return 'index';
    }

    public function actionSayHi()
    {
        return 'sayHi';
    }
}