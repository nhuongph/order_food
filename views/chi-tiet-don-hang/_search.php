<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChiTietDonHangSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chi-tiet-don-hang-models-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'madonhang') ?>

    <?= $form->field($model, 'masanpham') ?>

    <?= $form->field($model, 'tensanpham') ?>

    <?= $form->field($model, 'giasanpham') ?>

    <?php // echo $form->field($model, 'soluongsanpham') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
