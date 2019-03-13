<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Posts;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Обращения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posts-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Подать обращение', ['create'], ['class' => 'btn btn-success']) ?>

    </p>
	<?php $name=Yii::$app->user->identity['username']; ?>
<?php
 echo"Пользователь:$name";
	 

$dataProvider = new ActiveDataProvider([
    'query' => Posts::find()->where(['name' => "$name"]),

    'pagination' => [
        'pageSize' => 20,
    ],
]);
?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
         'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'text:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
