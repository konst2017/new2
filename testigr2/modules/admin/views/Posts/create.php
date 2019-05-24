<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Itogzad */

$this->title = 'Create Itogzad';
$this->params['breadcrumbs'][] = ['label' => 'Itogzads', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="itogzad-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
