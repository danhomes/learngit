<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%Weeks}}".
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property string $img
 * @property integer $num
 */
class Weeks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%Weeks}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num'], 'integer'],
            [['name', 'path', 'img'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'path' => 'Path',
            'img' => 'Img',
            'num' => 'Num',
        ];
    }
}
