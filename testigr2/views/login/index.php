<?php
//ФОРМА РЕГИСТРАЦИИ ПОЛЬЗОВАТЕЛЕЙ
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;


/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <p class="center">Заполните все поля для регистрации :</p>
    <div class="row">

            <?php $form = ActiveForm::begin([
                'id' => 'form-signup',
                'options' => ['class' => 'form-horizontal col-sm-offset-4 col-xs-offset-3 col-sm-4 col-xs-6'],
                                            ]); ?>
            <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                'captchaAction' => 'login/captcha',
                'template' => '<div><p>{image}</p><p>{input}</p></div>',
            ]) ?>
            <div class="form-group">
            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
            </div>
<?php ActiveForm::end(); ?>

    </div>
</div>​