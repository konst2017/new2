<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\web\Controller;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ConfirmEmailForm;//модель подтверждения регистрации по ссылке с email

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class LoginController extends Base
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
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
//                    'logout' => ['post'],
                ],
            ],
        ];
    }

    //Добавляем капчу
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'maxLength' => 5,
            ],
        ];
    }

    //регистрация на сайте
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                $mes = "На Ваш email отправлено письмо с кодом подтверждения регистрации .
                        Пожалуйста, проверте Вашу почту <b>".$model->email."</b> - найдите наше
                        письмо со ссылкой для подтверждения и кликните по ней .    ";
                Yii::$app->getSession()->setFlash('send_email', $mes);
                return $this->render('empty');
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    //подтверждение регистации по ссылке ,пришедшей с Email и присвоение роли user
    public function actionConfirmEmail($token)
    {
        try {
            $model = new ConfirmEmailForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->confirmEmail()) {
            Yii::$app->getSession()->setFlash('successConfirmEmail', 'Спасибо! Ваш Email успешно подтверждён и Вы прошли регистрацию .Теперь можете войти под своим логином на сайт ');
            return Yii::$app->getResponse()->redirect('login');
        } else {
            Yii::$app->getSession()->setFlash('error', 'Ошибка подтверждения Email.');
            return $this->goHome();
        }
    }

//Далее другие методы
}