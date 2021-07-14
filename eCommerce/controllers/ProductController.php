<?php
namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\Product;
class ProductController extends AppController{
public function actionView(){
    $id =Yii::$app->request->get('id');
    $product = Product::findOne($id);
    return $this->render('view', compact('product'));
}
}
?>