<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "donhang".
 *
 * @property int $id
 * @property string $tenkhachhang
 * @property int $sodienthoai
 * @property string $diachi
 */
class DonHangModels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'donhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tenkhachhang', 'sodienthoai', 'diachi'], 'required'],
            [['sodienthoai'], 'integer'],
            [['diachi'], 'string'],
            [['tenkhachhang'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'tenkhachhang' => Yii::t('app', 'Tenkhachhang'),
            'sodienthoai' => Yii::t('app', 'Sodienthoai'),
            'diachi' => Yii::t('app', 'Diachi'),
        ];
    }
}
