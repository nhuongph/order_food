<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CategoryModels */

$this->title = Yii::t('app', 'Create Category Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Category Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
