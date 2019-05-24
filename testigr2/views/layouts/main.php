<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\ltAppAsset;
use app\widgets\Alert;
use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use app\controllers\CategoryController;

AppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>

<html> 
<head> 
<meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head> 
<body>
<?php $this->beginBody() ?>
<table border="0" cellpadding="0" cellspacing="0" class="tbl1" width="800">
  <tr> 
    <td colspan="4"></td>
  </tr>
  <tr valign="top"> 
  
    <td width="60%" height="91"><img src="single_pixel.gif" width="1" height="140">
	
	
	</td>
    <td width="40%" height="91" colspan="3" valign="top" align="center"> 
<h2 align="center">Игра</h2>	
    </td>
  </tr>
  <tr> 
    <td colspan="3"  > 
  <tr> 
    <td valign="top" colspan="4"> 
      <table  height=500 width="90%" border="0" cellspacing="25">
       <tr>
        <td width="8%" valign="top"><img src="single_pixel.gif" width="140" height="1"><br>
		<p>Меню</p><br>
	

			<li><a href="<?= \yii\helpers\Url::home()?>">Главная</a></li>
<?php
     $navItems=[
   
  ];
  if (Yii::$app->user->isGuest) {
    array_push($navItems,['label' => 'Вход', 'name' => 'whod', 'url' => ['/user/login']],['label' => 'Регистрация', 'url' => ['/user/register']]);
  } else {
	  
	  $tip=Yii::$app->user->identity->tip; $pol=Yii::$app->user->identity->username;
	  if ($tip=="admin")
	  {
    array_push($navItems,['label' => 'Выход (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']]
    );
	
 array_push($navItems,['label' => 'Личный кабинет', 'url' => ['/admin']]);	
	  }	
	  
	else {
		
		?>
	
	<?php
	
	$pdo = new PDO('mysql:host=localhost;dbname=igr','root','12345'); 	
	
	foreach($pdo->query("select count(*) as whod from whod  ")as $row) 
{
	$wh=$row['whod'];
 

	
}
if($wh==0)
{
$whod = $pdo->exec("INSERT INTO `whod`  (whod) values  (1)");	
	
	 
	foreach($pdo->query("select count(*) as wiw from koligr where pol = '$pol'")as $row) 
{
	$rez=$row['wiw'];
 

	
}

if($rez!=0)
{
$wip = $pdo->exec("UPDATE koligr SET kol=kol+1 WHERE pol = '$pol'");
	
}
else
	 {

	
	$wip = $pdo->exec("INSERT INTO `koligr`  (pol,kol) values  ('$pol',1)");	
	
	 }

}
	 
	?> 
	
	
	<ul class="catalog category-products"><?= \app\components\MenuWidget::widget(['tpl' => 'menu'])?>
</ul> 
<?php
 array_push($navItems,['label' => 'Выход (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']]
    );
	
	}
  }  
	  
	  
  
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'items' => $navItems,
]);
    
    ?>



			
	</td>
	
	
        <td width="92%"> 
        
		<?= $content ?>
		
		<p> </p>
	</td>
       </tr>
      </table>
      <h2>&nbsp;</h2>
      </td>
  </tr>
</table>
<!-- Do not remove this div -->
<div align="center"><p>
 
</p>
<br>
</div>
<!-- End of footer div -->

<div style="font-size: 0.8em; text-align: center; margin-top: 1.0em; margin-bottom: 1.0em;">
<a href="http://web-mastery.info/">Как сделать сайт</a>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>