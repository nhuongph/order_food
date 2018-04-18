<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\FoodModels */

$this->title = Yii::t('app', 'Create Food Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Food Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
