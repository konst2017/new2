<?php

/* @var $this yii\web\View */

use yii\data\Pagination;
use app\models\Category;
use app\models\Product;
use yii\widgets\ActiveForm;
use app\models\Logo;
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


			
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
		
						<!-- END PRODUCT-BANNER -->
						<!-- START PRODUCT-AREA (1) -->
						<div class="product-area">


<?php if( !empty($products) ): ?>
<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Доска обьявлений</h2>
    <?php $i = 0; foreach($products as $hit): ?>
   
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                 
                    <h2><?= $hit->name?></h2>
                    <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id]) ?>"><?= $hit->name?></a></p>
                   
                </div>
               
            </div>
            
        </div>
    </div>
	
			
    <?php $i++?>
            <?php if($i % 3 == 0): ?>
                <div class="clearfix"></div>
            <?php endif;?>
            <?php endforeach;?>
        <div class="clearfix"></div>
        <?php
        echo \yii\widgets\LinkPager::widget([
            'pagination' => $pages,
        ]);
        ?>
        <?php else :?>
        <h2>Здесь обьявлений  пока нету......</h2>
    <?php endif;?>

</div><!--features_items-->









			<!-- END SUBSCRIBE-AREA -->
		</section>
		<!-- END HOME-PAGE-CONTENT -->
		<?php

?>