<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChiTietDonHangModels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chi-tiet-don-hang-models-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'madonhang')->textInput() ?>

    <?= $form->field($model, 'masanpham')->textInput() ?>

    <?= $form->field($model, 'tensanpham')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'giasanpham')->textInput() ?>

    <?= $form->field($model, 'soluongsanpham')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
