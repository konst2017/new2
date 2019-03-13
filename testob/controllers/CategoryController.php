<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Logo;
use app\models\Raspis;
use app\models\Posts;
use Yii;
use yii\data\Pagination;


class CategoryController extends AppController{



    public function actionIndex(){

       $hits = Posts::find();
 $pages = new Pagination(['totalCount' => $hits->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
      $products =$hits->offset($pages->offset)->limit($pages->limit)->all(); 
        return $this->render('index', compact('products','pages'));


       


}




 public function actionMain($id=null){

        $hitr = Category::find()->
where(['parent_id' => '0'])->
limit(6)->
all();
  $hitk = Category::find()->
where(['parent_id' => '.$id.' ])->
limit(6)->
all();
 $hits = Product::find()->
where(['hit' => '1'
,'category_id' => ''.$hits['id'].''
])->
limit(6)->
all();


$id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages2 = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
      
 return $this->render('index', compact('hitk', 'hits', 'hitr'));



}









    public function actionView($id){
        $id = Yii::$app->request->get('id');
//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $category = Category::findOne($id);
 if(empty($category))
            throw new \yii\web\HttpException(404, 'Такой категории нет');


        $this->setMeta('E-SHOPPER | ' . $category->name, $category->keywords, $category->description);
        return $this->render('view', compact('products', 'pages', 'category'));
        
 
    }


    public function actionSearch(){
        $q = trim(Yii::$app->request->get('q'));
        $this->setMeta('E-SHOPPER | Поиск: ' . $q);
        if(!$q)
            return $this->render('search');
if(empty($q))
            throw new \yii\web\HttpException(404, 'Такой категории нет');

        $query = Product::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search', compact('products', 'pages', 'q'));
    }





}

