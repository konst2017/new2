<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $itogzad['id']]) ?>">
        <?= $itogzad['id']?>
        <?php if( isset($itogzad['childs']) ): ?>

            <span class="badge pull-right"><i class="fa fa-plus"></i></span>
        <?php endif;?>
    </a>
    <?php if( isset($itogzad['childs']) ): ?>
        <ul>

            <?= $this->getMenuHtml($itogzad['childs'])?>
        </ul>
    <?php endif;?>
</li>