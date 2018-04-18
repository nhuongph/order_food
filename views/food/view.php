<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\common\components\Util;

/* @var $this yii\web\View */
/* @var $model app\models\FoodModels */

$this->title = $model->name_food;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Food Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="food-models-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a(Yii::t('app', 'Back'), ['index'], ['class' => 'btn btn-default common-button-default']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name_food',
            'price',
            [
                'attribute'=>'image',
                'value'=> '/order_foods/web/uploads/' . $model->image,
                'format' => ['image',['width'=>'auto','height'=>'500px']],
            ],
            'shop_id',
            'date_create',
            'address:ntext',
            'id_cat',
        ],
    ]) ?>

</div>
