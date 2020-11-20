<?php

namespace app\models;

use yii\db\ActiveRecord;

// Yii 会自动去猜测表名为 country
class Country extends ActiveRecord
{
    // 等价
    // public function tableName()
    // {
    //     return 'country';
    // }
}
