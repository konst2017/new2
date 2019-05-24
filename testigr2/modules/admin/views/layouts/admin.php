<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);

?>



<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<script type="text/javascript" src="free_versia_dla_slabovidyashih/special.js"></script>   
</head>
<body>
<?php $this->beginBody() ?>

	
	<!-- Start Rocket -->
	<!-- ********************* -->
	
	<!-- Parallax Background
	================================================== -->
	<!-- image is set in the CSS as a background image -->
	<!-- End Parallax Background
	================================================== -->
	
	<!-- Start Header
	================================================== -->
	



<div id="container">
<div id="navigation">
	<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				
			</div>
			<div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
				<ul class="nav navbar-nav">

				
				


<li>
    
</li>
	
				</ul>




<?php
     $navItems=[
   
  ];
  if (Yii::$app->user->isGuest) {
    array_push($navItems,['label' => 'Вход', 'url' => ['/user/login']],['label' => 'Регистрация', 'url' => ['/user/register']]);
  } else {
    array_push($navItems,['label' => 'Выход (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => ['data-method' => 'post']]
    );
	
 array_push($navItems,['label' => 'Личный кабинет', 'url' => ['/admin']]);	
	
	
  }
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-left'],
    'items' => $navItems,
]);
    
    ?>




			</div>

<div id="">
	
		</div>

	</div>


	
	
	
	<div class="container2">
	
	 
	<div id="content">
	<div class="mainmenu hidden-sm hidden-xs">
	
		
		
  

					
							</div>
  <?= $content ?>
	</div>

<div id="sidebar">
	
<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

</div>


</div>

	</div>



	
	<div id="clear">
		 
	</div>
							   
	<div id="footer">
	
 

	</div>
</div>

		<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
