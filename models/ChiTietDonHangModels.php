<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chitietdonhang".
 *
 * @property int $id
 * @property int $madonhang
 * @property int $masanpham
 * @property string $tensanpham
 * @property int $giasanpham
 * @property int $soluongsanpham
 */
class ChiTietDonHangModels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chitietdonhang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['madonhang', 'masanpham', 'tensanpham', 'giasanpham', 'soluongsanpham'], 'required'],
            [['madonhang', 'masanpham', 'giasanpham', 'soluongsanpham'], 'integer'],
            [['tensanpham'], 'string', 'max' => 10000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'madonhang' => Yii::t('app', 'Madonhang'),
            'masanpham' => Yii::t('app', 'Masanpham'),
            'tensanpham' => Yii::t('app', 'Tensanpham'),
            'giasanpham' => Yii::t('app', 'Giasanpham'),
            'soluongsanpham' => Yii::t('app', 'Soluongsanpham'),
        ];
    }
}
