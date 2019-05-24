<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zikl".
 *
 * @property integer $num
 * @property integer $id
 */
class Zikl extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'zikl';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['num'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'num' => 'Num',
            'id' => 'ID',
        ];
    }
}
