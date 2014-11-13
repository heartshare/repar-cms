<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%ear_user}}".
 *
 * @property string $id
 * @property string $username
 * @property string $password
 * @property string $name
 * @property string $avatar
 * @property string $email
 * @property string $tel
 * @property string $phone
 * @property integer $isenable
 * @property string $last_login_time
 * @property string $last_login_ip
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ear_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['isenable', 'last_login_time'], 'integer'],
            [['username'], 'string', 'max' => 16],
            [['password'], 'string', 'max' => 32],
            [['name', 'tel'], 'string', 'max' => 20],
            [['avatar'], 'string', 'max' => 50],
            [['email'], 'string', 'max' => 40],
            [['phone', 'last_login_ip'], 'string', 'max' => 15]
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
            'name' => Yii::t('app', 'Name'),
            'avatar' => Yii::t('app', 'Avatar'),
            'email' => Yii::t('app', 'Email'),
            'tel' => Yii::t('app', 'Tel'),
            'phone' => Yii::t('app', 'Phone'),
            'isenable' => Yii::t('app', 'Isenable'),
            'last_login_time' => Yii::t('app', 'Last Login Time'),
            'last_login_ip' => Yii::t('app', 'Last Login Ip'),
        ];
    }
}
