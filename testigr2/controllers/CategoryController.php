<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;
use app\models\Itogzad;
use app\models\Test;
use app\models\Zikl;
use Yii;
use yii\data\Pagination;


class CategoryController extends AppController{



    public function actionIndex(){

       $hitr = test::find()->all();
       $hits = itogzad::find()->where(['id' => '2'])->limit(6)->all();

        $this->setMeta('E-SHOPPER');

        return $this->render('index', compact('hits','hitr'));


       


     }

  
	
	
	  public function beforeAction($action)
    {
        if ($this->action->id == 'view')
        {
            $this->enableCsrfValidation = false;
        }

        return parent::beforeAction($action);

    }
	

    public function actionView($id){
        $id = Yii::$app->request->get('id');

        $hits2 = itogzad::find()->where(['id'  => $id])->limit(6)->all();
     
     
  if (isset($_GET["id"])) 
{

 // $per= zikl::deleteAll(); 

 // $test= test::deleteAll(); 

        return $this->render('view', compact('hits2','per','test'));
}
        
 
    }






}

