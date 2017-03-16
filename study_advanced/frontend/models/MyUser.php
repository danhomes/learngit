<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%my_user}}".
 *
 * @property integer $u_id
 * @property string $username
 * @property string $pwd
 */
class MyUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%my_user}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'pwd'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'u_id' => 'U ID',
            'username' => 'Username',
            'pwd' => 'Pwd',
        ];
    }
}
