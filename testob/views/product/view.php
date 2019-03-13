<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
?>
<section>


<div class="recommended_items">
    <!--recommended_items-->
    <h2 class="title text-center">Тема</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
<?php foreach($hits as $hit): ?>
<?php if($i % 3 == 0): ?>
    <div class="item <?php if($i == 0) echo 'active' ?>">
<?php endif; ?>
        <div class="col-sm-4">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                       
                        <h2><?= $hit->name?></h2>
                        <p><?= $hit->text?></p>
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

<?php endforeach; ?>
        </div>
      
    </div>
</div><!--/recommended_items-->

</div>
</div>
</div>
</section>