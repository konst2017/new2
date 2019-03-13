<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\SignupForm;
use app\models\PasswordResetRequestForm;
use app\models\ResetPasswordForm;
use yii\data\Pagination;
class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

 

 public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }



  public function actionOnas()
    {
        return $this->render('onas');
    }

   public function actionDejat()
    {
        return $this->render('dejat');
    }  
  public function actionPres()
    {
        return $this->render('Pres');
    }  
 public function actionDok()
    {
        return $this->render('dok');
    }  

 public function actionGos()
    {
        return $this->render('gos');
    } 



public function actionOtk()
    {
        return $this->render('otk');

    }  





public function actionKon()
    {
        return $this->render('kon');
    } 



public function actionPens()
    {
        return $this->render('pens');
    } 
	 

public function actionForm()
    {
        return $this->render('form');
    } 


public function actionBud()
    {
        return $this->render('bud');
    } 

public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

	
}
