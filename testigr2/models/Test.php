<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property string $naim
 * @property integer $id
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['naim'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'naim' => 'Naim',
            'id' => 'ID',
        ];
    }
}
