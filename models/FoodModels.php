<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "food".
 *
 * @property int $id
 * @property string $name_food
 * @property string $price
 * @property string $image
 * @property int $shop_id
 * @property string $date_create
 * @property string $address
 * @property int $id_cat
 */
class FoodModels extends \yii\db\ActiveRecord
{
    
    public $file_image;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'food';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_food', 'price', 'image', 'shop_id', 'date_create', 'address', 'id_cat'], 'required'],
            [['price', 'shop_id', 'id_cat'], 'integer'],
            [['address'], 'string'],
            [['name_food'], 'string', 'max' => 255],
            [['image'], 'string', 'max' => 100],
            [['date_create'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_food' => Yii::t('app', 'Name Food'),
            'price' => Yii::t('app', 'Price'),
            'image' => Yii::t('app', 'Image'),
            'shop_id' => Yii::t('app', 'Shop ID'),
            'date_create' => Yii::t('app', 'Date Create'),
            'address' => Yii::t('app', 'Address'),
            'id_cat' => Yii::t('app', 'Id Cat'),
        ];
    }
}
