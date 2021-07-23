<?php

 namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
 class CategoryController extends AppController{
  public function actionIndex(){
     $hits = Product::find()->where(['hit'=>'1'])->limit(6)->all();
     $this->setMeta('E-SHOPER');
    
   return $this->render('index', compact('hits'));
    }
public function actionView(){
 $id = Yii::$app->request->get('id');

 //$products = Product::find()->where(['category_id' => $id])-> limit(2)->all();
 $query = Product::find()->where(['category_id' => $id]);
 $pages = new Pagination(['totalCount'=> $query->count(),'pageSize'=> 10]);
 $products = $query->offset($pages->offset)->limit($pages->limit)->all();
 $category=Category::findOne($id);
 $this->setMeta('E-SHOPER | ' . $category->name, $category->keywords, $category->description);
 return $this->render('view', compact('products','pages', 'category'));
    }
    public function actionSearch(){
      $q = Yii::$app->request->get('q');
      $query =Product::find()->where(['like', 'name', $q]);
      $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 10,
       'forcePageParam' => false, 'pageSizeParam' => false]);
      $products = $query->offset($pages->offset)->limit($pages->limit)->all();
      return $this->render('search', compact('products','pages', 'q'));

    }
}
