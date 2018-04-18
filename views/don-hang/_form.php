<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DonHangModels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="don-hang-models-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tenkhachhang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sodienthoai')->textInput() ?>

    <?= $form->field($model, 'diachi')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
