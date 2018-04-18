<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $fullname
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property int $gender
 * @property string $date_of_brith
 * @property int $role_id
 * @property string $date_create
 * @property int $active
 *
 * @property Roles $role
 */
class UserModels extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $authKey;
    public $accessToken;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'fullname', 'email', 'phone'], 'required'],
            [['email'], 'email'],
            [['date_of_brith', 'date_create'], 'date'],
            [['role_id'], 'integer'],
            [['username', 'password'], 'string', 'max' => 32],
            [['fullname', 'email'], 'string', 'max' => 50],
            [['phone'], 'string', 'max' => 13],
            [['phone'], 'integer'],
            [['address'], 'string', 'max' => 150],
            [['gender', 'active'], 'string', 'max' => 1],
            [['role_id'], 'exist', 'skipOnError' => true, 'targetClass' => RoleModels::className(), 'targetAttribute' => ['role_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'fullname' => Yii::t('app', 'Fullname'),
            'email' => Yii::t('app', 'Email'),
            'phone' => Yii::t('app', 'Phone'),
            'address' => Yii::t('app', 'Address'),
            'gender' => Yii::t('app', 'Gender'),
            'date_of_brith' => Yii::t('app', 'Date Of Brith'),
            'role_id' => Yii::t('app', 'Role ID'),
            'date_create' => Yii::t('app', 'Date Create'),
            'active' => Yii::t('app', 'Active'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRole()
    {
        return $this->hasOne(RoleModels::className(), ['id' => 'role_id']);
    }

    public function getAuthKey() {
        return $this->authKey;
    }

    public function getId() {
        return $this->getPrimaryKey();
    }

    public function validateAuthKey($authKey) {
        return $this->getAuthKey() === $authKey;
    }

    public static function findIdentity($id) {
        return static::findOne(['id' => $id]);
    }

    public static function findIdentityByAccessToken($token, $type = null) {
        return null;
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->authKey = Yii::$app->security->generateRandomString();
    }

}
