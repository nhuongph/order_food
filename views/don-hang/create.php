<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DonHangModels */

$this->title = Yii::t('app', 'Create Don Hang Models');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Don Hang Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="don-hang-models-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
