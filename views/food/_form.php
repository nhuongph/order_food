<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\common\components\Util;
use kartik\file\FileInput;
use kartik\date\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\FoodModels */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="food-models-form">

    <?php $form = ActiveForm::begin([
    'options'=>[
                    'enctype'=>'multipart/form-data',
                    'id' => strtolower($model->formName()) . '-id'
        ] // important
    ]); ?>

    <?= $form->field($model, 'name_food')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_image')
    ->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions'=>['jpg', 'gif', 'png', 'jpge'],
            'initialPreview'=>[
                Html::img(Util::getUrlImage($model->image))
            ],
            'overwriteInitial'=>true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]) ?>

    <?= $form->field($model, 'shop_id')->dropDownList(\app\models\CategoryModels::find()->select('name_cat')->indexBy('id')->column()) ?>

    <?= $form->field($model, 'date_create')->widget(DatePicker::classname(), [
	'name' => 'date_create', 
	'value' => date('dd-mm-yyyy'),
	'options' => ['placeholder' => 'Select date ...'],
	'pluginOptions' => [
		'format' => 'dd-mm-yyyy',
		'todayHighlight' => true
	]
    ])  ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_cat')->dropDownList(\app\models\CategoryModels::find()->select('name_cat')->indexBy('id')->column()) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-default common-button-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
