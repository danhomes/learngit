<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Advanced}}".
 *
 * @property integer $id
 * @property string $username
 * @property string $pwd
 */
class Advanced extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Advanced}}';
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
            'id' => 'ID',
            'username' => 'Username',
            'pwd' => 'Pwd',
        ];
    }
}
