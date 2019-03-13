<?php

namespace app\modules\admin\controllers;

use Yii;

use yii\data\ActiveDataProvider;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

 
use app\modules\admin\models\PasswordChangeForm;
use app\modules\admin\models\User;
use app\modules\admin\models\ProfileUpdateForm;
use yii\filters\AccessControl;
use yii\web\Controller;

/**
 * CategoryController implements the CRUD actions for Category model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Category models.
     * @return mixed
     */
	 
	 public function actionIndex()
    {
        return $this->render('index', [
            'model' => $this->findModel(),
        ]);
    }
 
    /**
     * @return User the loaded model
     */
    private function findModel()
    {
        return User::findOne(Yii::$app->user->identity->getId());
    } 
	 
	 
 public function actionPasswordChange()
    {
        $user = $this->findModel();
        $model = new PasswordChangeForm($user);
 
        if ($model->load(Yii::$app->request->post()) && $model->changePassword()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('passwordChange', [
                'model' => $model,
            ]);
        }
    }

    public function actionView()
    {
		//  $user = $this->findModel();
        $model = new PasswordChangeForm;
        return $this->render('view', [
                            'model' => $model,
        ]);
    } 
  
public function actionUpdate()
    {
        $user = $this->findModel();
    $model = new ProfileUpdateForm($user);
 
    if ($model->load(Yii::$app->request->post()) && $model->update()) {
        return $this->redirect(['index']);
    } else {
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    }
   
   
   
   
}
