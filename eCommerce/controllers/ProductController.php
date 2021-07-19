<?php
namespace app\controllers;
use app\models\Category;
use Yii;
use app\models\Product;
class ProductController extends AppController{
public function actionView(){
    $id =Yii::$app->request->get('id');
    $product = Product::findOne($id);
    $this->setMeta('E-SHOPER | ' . $product->name, $product->keywords, $product->description);
    return $this->render('view', compact('product'));
}
}
?>