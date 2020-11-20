<?php

// controllers\admin
namespace app\controllers\admin;


use yii\web\Controller;


/**
 * 子目录控制器，并不是模块（在你不想用模块的情况下给控制器分类，这种方式很有用。）
 * @package app\controllers
 */
class ArticleController extends Controller
{
//    http://localhost:8080/yii2/basic/web/index.php?r=admin/article
    public function actionIndex()
    {
        echo 'admin/article';
    }
}