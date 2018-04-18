<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RoleModels */

$this->title = Yii::t('app', 'Create Role Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Role Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="role-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
