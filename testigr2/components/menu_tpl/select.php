<option
    value="<?= $itogzad['id']?>"
    <?php if($itogzad['id'] == $this->model->parent_id) echo ' selected'?>
    <?php if($itogzad['id'] == $this->model->id) echo ' disabled'?>
    ><?= $tab . $itogzad['name']?></option>
<?php if( isset($itogzad['childs']) ): ?>
    <ul>
        <?= $this->getMenuHtml($itogzad['childs'], $tab . '-')?>
    </ul>
<?php endif;?>