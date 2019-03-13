<?php
/**
 * Created by PhpStorm.
 * User: Andrey
 * Date: 26.03.2016
 * Time: 9:32
 */

namespace app\models;
use yii\db\ActiveRecord;
use yii\base\Model;
use yii\web\UploadedFile;

class TestForm extends ActiveRecord{
   public $file;
    public static function tableName(){
        return 'posts';
    }

    public function attributeLabels(){
        return [
            'name' => 'Имя*',
            'email' => 'E-mail',
            'text' => 'Текст сообщения',
            'fam' => 'Фамилия*',
            'oth' => 'Отчество',
            'tem' => 'Тема',



             'sohpol' => 'Cоциальное положение',
            'polotw' => 'Вариант получения ответа',
            'stran' => 'Страны',
            'index' => 'Индекс*',
            'raion' => 'Район',
            'naspunct' => 'Населённый пункт*',
             'region' => 'Регион*', 

  

               'tipnas' => 'Тип населённого пункта',
            'naimul' => 'Наименование улицы',
            'tipul' => 'Тип улицы',
            'dom' => 'Дом',
            'kor' => 'Корпус',
            'kwar' => 'Квартира',

        ];
    }

    public function rules(){
        return [
		 [['file'], 'file'],
              [['name', 'text', 'fam', 'oth', 
            'tem',



             'sohpol',
           
            'stran',
            'index' ,
            'raion' ,
            'naspunct' ,
             'region' , 

               'index',

               'tipnas' ,
            'naimul' ,
            'tipul' ,
            'dom',
            'kor' ,
            'kwar' ], 'required' ],
            [ 'email', 'trim' ],
        ];
    }

    
 
	
} 