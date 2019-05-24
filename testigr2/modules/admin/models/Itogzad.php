<?php

namespace app\modules\admin\models;
//use yii\validators\Validator;
use Yii;

/**
 * This is the model class for table "itogzad".
 *
 * @property string $naim
 * @property int $id
 */
class Itogzad extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'itogzad';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
		
		
		 
        return [
            [['naim'], 'string', 'max' => 255,'min' => 2],
			[['wid'], 'string'],
			 [ [ 'naim'], 'required' ],
	
       
['naim', 'checkName'],
['naim', 'poisk'],
['naim', 'poiskk'],
['naim', 'poiskt'],
['naim', 'poiskn'],
['naim', 'poiskn2'],
['naim', 'poiskn3'],
['naim', 'poiskwop'],
['naim', 'poiskwos'],
['naim', 'poiskkom'],
['naim', 'poiskkom2'],
['naim', 'pod'],  
['naim', 'powt'], 
 ['naim', 'powts'],  
  ['naim', 'powts2'], 
   ['naim', 'powts3'], 
        ];
    }
	
	
	public function checkName($attribute,$params){
        $pattern = '/\|\^|\*|\#\@|\$|\&|\^|\%|\~/';
        if(!preg_match($pattern, $this->$attribute))
			{
 
} else {
   $this->addError($attribute, 'False');
}
		
		
           
    }
 

 

public function poisk($attribute,$params){
        $pattern = '-';
		  $pattern2 = '/\-/';
		if (strpos($this->$attribute,$pattern) == 0 and preg_match($pattern2, $this->$attribute))
			{
 $this->addError($attribute, 'Дефис присутствует вначале');
} else {
   
}
		
		
           
    }
	
	
	
	public function poiskn($attribute,$params){
     
		  $pattern1 = '/\?.!/'; 
		if (preg_match($pattern1, $this->$attribute)   )
			{
 $this->addError($attribute, 'Неправильная комбинация');
}	
		
           
    }
		public function poiskn2($attribute,$params){
     $pattern1 = '/\.\!\?/'; 	
		
		 if(preg_match($pattern1, $this->$attribute))
			{
 $this->addError($attribute, 'Неправильная комбинация2');
} 
		
		
           
    }
           
    
	
	public function poiskn3($attribute,$params){
     //   /^def/   '#a+#',
		 $pattern1 = '/!\.\?/';
		if (preg_match($pattern1, $this->$attribute)   )
			{
 $this->addError($attribute, 'Неправильная комбинация3');
}	
		
           
    }
	/*
	$data = "Две в и одна с !";

$result = count_chars($data, 0);

for ($i=0; $i < count($result); $i++) {
   if ( chr($i)== "!")
       echo "\"" , chr($i) , "\" встречается в строке $result[$i] раз(а).\n";
}
	
*/	
	
	
	public function powts($attribute,$params){
     $result = count_chars($this->$attribute, 0);

		
		 for ($i=0; $i < count($result); $i++) {
   if (( chr($i)== "!") and ($result[$i] >3))
      // echo "\"" , chr($i) , "\" встречается в строке $result[$i] раз(а).\n";
	   
	 $this->addError($attribute, '! встречается больше 3 раз ');  
	   
}
  }
	
public function powts2($attribute,$params){
     $result = count_chars($this->$attribute, 0);

		 for ($i=0; $i < count($result); $i++) {
   if (( chr($i)== "?") and ($result[$i] >3))
      // echo "\"" , chr($i) , "\" встречается в строке $result[$i] раз(а).\n";
	   
	 $this->addError($attribute, '? встречается больше 3 раз ');  
	   
}
  }

  public function powts3($attribute,$params){
     $result = count_chars($this->$attribute, 0);

		
		 
		 for ($i=0; $i < count($result); $i++) {
   if (( chr($i)== ".") and ($result[$i] >3))
      // echo "\"" , chr($i) , "\" встречается в строке $result[$i] раз(а).\n";
	   
	 $this->addError($attribute, '. встречается больше 3 раз ');  
	   
}
  }
	
public function poiskk($attribute,$params){
        $pattern = '-';
		  $pattern2 = '/\-/';
	$poz2=strripos($this->$attribute,$pattern);
     
$count3 = strlen($pattern);
$count2 = strlen($this->$attribute);
$count3 = (int)$count3;
$count2 = (int)$count2;
$poz2=(int)$poz2;
$count4= $poz2+$count3;	
		if ($count2 == $count4 and preg_match($pattern2, $this->$attribute))
			{
  $this->addError($attribute, 'Дефис    в конце'); 
} else {
 
}
		
		
           
    }	
	
	
	public function poiskt($attribute,$params){
        $pattern = '.';
		$pattern2 = '/\!\?\.|\?\!\./';
		  $pattern3 = '/\./';
		 $pattern4 = '/\!\?|\?\!/';	 
	$poz2=strripos($this->$attribute,$pattern);
     
$count3 = strlen($pattern);
$count2 = strlen($this->$attribute);
$count3 = (int)$count3;
$count2 = (int)$count2;
$poz2=(int)$poz2;
$count4= $poz2+$count3;	
if (preg_match($pattern3,$this->$attribute) and ($count2 == $count4)  and !preg_match($pattern2, $this->$attribute) and !preg_match($pattern4, $this->$attribute))
{

}
 else
 {
 
 if (!preg_match($pattern3,$this->$attribute) or preg_match($pattern2, $this->$attribute) or preg_match($pattern4, $this->$attribute) )
 {}
 else {
 
$this->addError($attribute, 'Точка не   в конце');


 
}

}
}
		
		
	
	public function poiskwop($attribute,$params){
        $pattern = '?';
		
$pattern2 = '/\!?\.|\?!\./';
		$pattern3 = '/\?/';
		$pattern4 = '/\!\?|\?\!/';	
		
	$poz2=strripos($this->$attribute,$pattern);
     
$count3 = strlen($pattern);
$count2 = strlen($this->$attribute);
$count3 = (int)$count3;
$count2 = (int)$count2;
$poz2=(int)$poz2;
$count4= $poz2+$count3;	
	
	if (preg_match($pattern3,$this->$attribute) and $count2 == $count4  and !preg_match($pattern2, $this->$attribute) and !preg_match($pattern4, $this->$attribute))
{

}
 else
 {
 
 if (!preg_match($pattern3,$this->$attribute) or preg_match($pattern2, $this->$attribute) or preg_match($pattern4, $this->$attribute) )
 {}
 else {
 
$this->addError($attribute, 'Вопросительный знак не   в конце');


 
}

  }	
  
  
 
 
  
		
           
    }	
	
	
	public function poiskwos($attribute,$params){
        $pattern = '!';
		 $pattern3 = '/\!/';
		$pattern2 = '/\!?\.|\?!\./';
		
			$pattern4 = '/\!\?|\?\!/';
	$poz2=strripos($this->$attribute,$pattern);
     
$count3 = strlen($pattern);
$count2 = strlen($this->$attribute);
$count3 = (int)$count3;
$count2 = (int)$count2;
$poz2=(int)$poz2;
$count4= $poz2+$count3;	
if (preg_match($pattern3,$this->$attribute) and $count2 == $count4  and !preg_match($pattern2, $this->$attribute) and !preg_match($pattern4, $this->$attribute))
{

}
 else
 {
 
 if (!preg_match($pattern3,$this->$attribute) or preg_match($pattern2, $this->$attribute) or preg_match($pattern4, $this->$attribute) )
 {}
 else {
$this->addError($attribute, 'Восклицательный знак не   в конце'); 
}
  }	

  }	
	
public function poiskkom($attribute,$params){
        
		
		
           
    }		


public function poiskkom2($attribute,$params){
        $pattern = '?!.';
		$pattern2 = '/\?!./';
		
	$poz2=strripos($this->$attribute,$pattern);
     
$count3 = strlen($pattern);
$count2 = strlen($this->$attribute);
$count3 = (int)$count3;
$count2 = (int)$count2;
$poz2=(int)$poz2;
$count4= $poz2+$count3;	
		if ($count2 != $count4 and preg_match($pattern2, $this->$attribute))
			{
 $this->addError($attribute, 'Комбинация2 не  в конце');
}
		
		
           
    }		


	
	
	
	public function pod($attribute,$params){
        $pattern = '-';
		
		if (substr_count($this->$attribute,$pattern) >=3)
			{
 $this->addError($attribute, 'Больше 2 дефисов');
} else {
   
}
		
		
           
    }
	
	
	
	
	
	
	
 public function powt($attribute, $params)
    {
		
		 $pattern = '/\--/';
        
        if(preg_match($pattern, $this->$attribute))
		{
            $this->addError($attribute, 'Два дефиса подряд.');
        }
    }
	

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'naim' => 'Naim',
            'id' => 'ID',
			'wid' => 'WID',
        ];
    }
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}
