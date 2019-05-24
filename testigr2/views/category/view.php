<?php

/* @var $this yii\web\View */

use yii\data\Pagination;

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use app\controllers\CategoryController;
use mihaildev\ckeditor\CKEditor;
use yii\helpers\Html;








$this->title = 'My Yii Application';


?>

<?php 

$p=0;
if(!empty($hits2)): ?>
<?php

?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Задания</h2>
	
	  
	
    <?php foreach($hits2 as $hit): ?>
   
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                
                    <?= $p=$hit->id?>
					<textarea class="area" name="naim"> 
					<h2 class="naim" ><?=  $pizza=$hit->naim?></h2>
					</textarea> 
               <?php
			   
$pieces = explode(" ", $pizza);

  $c   = count($pieces);
 $r=0;
          
?>
 <form method="post" action="">
 <?php
 $pdo = new PDO('mysql:host=localhost;dbname=igr','root','12345'); 

$i=0;



if (isset($_POST["gen"])) 
{

for ($i = 0; $i < $c;)
  {
   
 
$zap=1;


$pr=rand(0, $c-1);

foreach($pdo->query("select count(*) as wiw from zikl where num = '$pr' ")as $row) 
{
	$zap=$row['wiw'];
 

	
}


if($zap!=0)
{

	
}
	 else
	 {

	
	$zikl = $pdo->exec("INSERT INTO `zikl`  (num) values  ('$pr');");	
	

 $i=$i+1;
 
 ?>	
 

	
	
	
	
<?php
	 }	 	
} 
}

 foreach($pdo->query("select *  from zikl  ")as $row) 
{
	$w=$row['num'];
	
 if($w!=" ")
{
?>
<button name="<?php echo"$w" ?>" value="<?php echo"$pieces[$w]" ?>"><?= $pieces[$w] ?></button>






	
<?php

}
if (isset($_POST["$w"])) 
{
	
$data[$w]= $_POST["$w"];

$data=$data[$w];

try {
    $dbh = new PDO('mysql:dbname=igr;host=localhost', 'root', '12345');
} catch (PDOException $e) {
    die($e->getMessage());
}

$sth = $dbh->query("INSERT INTO `test`  (naim,numz) values  ('$data','$p');");

$sth2 = $dbh->query("INSERT INTO `test`  (naim,numz) values  (' ','$p');");

}	
}






  


?>

   <?php endforeach;?>

<?php endif; ?>
                  	
	<p><textarea class="area" name="comment"> 
<?php 

$pdo = new PDO('mysql:host=localhost;dbname=igr','root','12345');
$st = $pdo->prepare("SET NAMES 'utf-8'");
$st->execute();



?>

<?php
foreach($pdo->query(' select *  from test where numz='.$p.' ') as $row)
{

$name=$row['naim'];
 
echo"$name"; 

}


?>
	
	 </textarea></p>	
	 
	<div class="blok" >
 
	 <?php
foreach($pdo->query(' select *  from test where numz='.$p.' ') as $row)
{

$name=$row['naim'];
 
if($name!=" ")
{
?>
<button name="<?php echo"$name" ?>" class="but" value="<?php echo"$name" ?>"><?= $name ?></button>

<?php
}
if (isset($_POST["$name"])) 
{

$nam= $_POST["$name"];

foreach($pdo->query("select * from test where naim = '$nam'") as $row)
{

$id=$row['id'];
 
$id=$id+1;

}



$qnam = "delete from test where naim = '$nam' or id= $id";
$str = $pdo->prepare($qnam);
$str->execute();




}

}


?>
	</div> 
	
		<button name="prow" value="Проверить">Проверить</button>
		<button name="gen" value="">Сгенерировать</button>
	<?php	
	if ((isset($_POST["comment"]))and (isset($_POST["prow"]))) 
{	
echo"<br>"; $comment=$_POST["comment"];


$pieces2 = explode(" ", $comment);
//echo $pieces2[0]; // кусок1

$comm=$pieces2[2];	

//$comment = str_replace(' ', '', trim($comment));

 $comment = trim($comment); 
?>
	<?php
	
	echo"<br>";	
	
	
	
	
try{
$query = "select *  from itogzad where naim = '$comment'";
$st = $pdo->prepare($query);
$st->execute();
$user = $st->fetch(PDO::FETCH_NUM);$pol=Yii::$app->user->identity->username;

foreach($pdo->query("select *  from koligr where pol = '$pol'")as $row) 
{
	$igr=$row['kol'];
 

	
}


if($user)
{
	echo 'Вы распознали замысел автора ';
	
$itog = $pdo->exec("INSERT INTO `rez`  (polzow,rez,zad,igr) values  ('$pol','pob','$p','$igr')");	
	
	
	
}
else
{
	
	$itog = $pdo->exec("INSERT INTO `rez`  (polzow,rez,zad,igr) values  ('$pol','proigr','$p','$igr')");	
	

	
	echo 'Увы, но автор думал иначе ';
}
}
catch (PDOException $e) 
{
	echo 'Ошибка выполнения запроса: ' . $e->getMessage();
}
foreach($pdo->query("select *  from itogzad where naim like '%$comm%'") as $row)
{

$naim=$row['naim'];
 
echo"Целое предложение оригинал:$naim";

}

foreach($pdo->query("select count(*) as wiw from zikl where num = '$pr' ")as $row) 
{
	$zap=$row['wiw'];
 

	
}

foreach($pdo->query(" select count(*) as pob from rez where rez='pob' and polzow='$pol'
and igr= '$igr'")as $row) 
{
	$pob=$row['pob'];
 

	
}


foreach($pdo->query(" select count(*) as pr from rez where rez='proigr' and polzow='$pol'
and igr= '$igr'")as $row) 
{
	$pr=$row['pr'];
 

	
}
if(($pob!=0) or ($pr!=0))
{
$srpob=(int)($pob*100/($pob+$pr));
$srpr=(int)($pr*100/($pob+$pr));
}
echo"<h3>Среднее число побед в игре : $srpob% </h3>";
echo"<h3>Среднее число поражений в игре : $srpr%</h3>"; 
echo"<h3>Количество игр:$igr</h3>";
$del1 = $pdo->query("delete from test");
$del2 = $pdo->query("delete from zikl");
}


?>	
		
		
	 </form>
            </div>
            <div class="choose">
               
            </div>
        </div>
    </div>
 
</div>







		







