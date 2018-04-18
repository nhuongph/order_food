<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\UserModels */

$this->title = Yii::t('app', 'Create User Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'User Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
