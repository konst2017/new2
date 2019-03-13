<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 08.05.2016
 * Time: 10:00
 */

namespace app\controllers;

use Yii;
use yii\data\Pagination;


class IngridController extends AppController{



    public function actionIndex(){

   

      
        return $this->render('index');
    }



}

