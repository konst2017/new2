<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "whod".
 *
 * @property int $id
 * @property int $whod
 */
class Whod extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'whod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['whod'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'whod' => 'Whod',
        ];
    }
}
