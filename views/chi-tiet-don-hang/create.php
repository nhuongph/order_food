<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ChiTietDonHangModels */

$this->title = Yii::t('app', 'Create Chi Tiet Don Hang Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Chi Tiet Don Hang Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chi-tiet-don-hang-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
