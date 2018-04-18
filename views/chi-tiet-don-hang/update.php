<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ChiTietDonHangModels */

$this->title = Yii::t('app', 'Update Chi Tiet Don Hang Models: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chi Tiet Don Hang Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="chi-tiet-don-hang-models-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
