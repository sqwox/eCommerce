<?php
namespace app\controllers;
use yii\base\Controller;

class AppController extends Controller {
protected function setMeta($title = null, $description = null, $keywords = null){
$this->view->title = $title;
$this->view->registerMetaTag([
    'name'=>'keywords',
    'content'=>"$keywords"
]);
$this->view->registerMetaTag([
    'name' =>'description',
    'content' =>"$description"
]);
}

}