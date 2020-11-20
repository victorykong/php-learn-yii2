<?php

namespace app\models;

//use yii\base\Model;
use yii\db\ActiveRecord;

//class Study extends Model
class Study extends ActiveRecord
{

    const SCENARIO_LOGIN = 'login';
    const SCENARIO_REGISTER = 'register';

//    public $name;
//    public $email;


//    // 自定义属性标签
//    public function attributeLabels()
//    {
//        return [
//            "name" => "Your Name"
//        ];
//    }

    // 规则
//    public function rules()
//    {
//        return [
//            [['name', 'email'], 'required'],
//            ['email', 'email'],
//        ];
//    }

// 场景
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios[self::SCENARIO_LOGIN] = ['name', 'email'];
        $scenarios[self::SCENARIO_REGISTER] = ['name'];
        return $scenarios;
    }
}