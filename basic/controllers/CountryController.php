<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;

use app\models\Country; // M - models


class CountryController extends Controller
{
    public function actionIndex()
    {
        // phpinfo();
        // return;


        // 数据库操作 start
        $query = Country::find(); // 返回 country 表中所有数据
        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        // offset limit 由视图的 LinkPager 传递
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        // 数据库操作 end

        // render view
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination,
        ]);
    }
}
