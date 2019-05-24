<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "itogzad".
 *
 * @property string $naim
 * @property integer $id
 */
class Itogzad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */



    public static function tableName()
    {
        return 'itogzad';
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
