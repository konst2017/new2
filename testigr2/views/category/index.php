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








$this->title = 'My Yii Application';

use yii\helpers\Html;
?>

<?php 

$p=0;
if( !empty($hits) ): ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Хиты продаж</h2>
    <?php foreach($hits as $hit): ?>
   
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                   
                    <?php $p=$p+1; ?>
					
					<h2><?=  $pizza=$hit->naim?></h2>
               <?php
			   
$pieces = explode(" ", $pizza);

  $c   = count($pieces);
 
echo $c;           
?>
 <form method="get" action="">
 <?php
for ($i = 0; $i < $c; $i++)
  {
 echo"i:$i";  
?>	
	<button name="<?php echo"$i" ?>" value="<?php echo"$pieces[$i]" ?>"><?= $pieces[$i] ?></button>
	
	
	
	
<?php	
if (isset($_GET["$i"])) 
{
	
$data[$i]= $_GET["$i"];

$data=$data[$i];
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
		<button name="prow" value="Проверить">Проверить</button>
		
	<?php	
	if ((isset($_GET["comment"]))and (isset($_GET["prow"]))) 
{	
echo"работает2";$comment=$_GET["comment"];echo"$comment";
?>
	<?php



 
 
 foreach($pdo->query("select *  from itogzad " ) as $row)
{

$name=$row['naim'];
 echo"name:$name";
if($name==$comment) 
$count=1;echo"count:$count";
}
 
 
if($count==1)
echo"Вы   выполнили задание";
else
echo"Вы  не выполнили задание";	
}

?>	
		
		
	 </form>
            </div>
            <div class="choose">
               
            </div>
        </div>
    </div>
    <?php endforeach;?>
</div><!--features_items-->
<?php endif; ?>






		







