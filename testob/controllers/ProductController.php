<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 09.05.2016
 * Time: 10:50
 */

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use app\models\Posts;
use Yii;

class ProductController extends AppController{

    public function actionView($id){
        $id = Yii::$app->request->get('id');
        $posts = Posts::findOne($id);
   $hits = Posts::findOne($id);
    $hits = Posts::find()->where(['id' => "$id"])->limit(6)->all();     
       
       
 return $this->render('view', compact('posts', 'hits'));
    }


public function actionindex($id){
        $id = Yii::$app->request->get('id');
        $product = Product::findOne($id);
  if(empty($product))
            throw new \yii\web\HttpException(404, '������ ������ ���');
//        $product = Product::find()->with('category')->where(['id' => $id])->limit(1)->one();
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $product->name, $product->keywords, $product->description);
        return $this->render('view', compact('product', 'hits'));
 
    }
 


} 