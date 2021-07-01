<?php

namespace app\models;
use yii\db\ActiveRecord;

class Product extends ActiveRecord{
    public static function tableName(){
        return 'product';
    }

    public function getCtegory(){
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}