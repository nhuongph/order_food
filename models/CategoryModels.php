<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $name_cat
 * @property string $picture
 */
class CategoryModels extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_cat', 'picture'], 'required'],
            [['name_cat', 'picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name_cat' => Yii::t('app', 'Name Cat'),
            'picture' => Yii::t('app', 'Picture'),
        ];
    }
}
