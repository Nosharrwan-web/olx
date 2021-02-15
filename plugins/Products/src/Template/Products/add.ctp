<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product,array('type'=>'file')) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('file', ['label' => __('Image'), 'class' => 'form-control', 'type' => 'file']) ; 
            echo $this->Form->control('filee', ['label' => __('Image1'), 'class' => 'form-control', 'type' => 'file']) ; 
            echo $this->Form->control('fileee', ['label' => __('Image2'), 'class' => 'form-control', 'type' => 'file']) ; 
            echo $this->Form->control('price');
            echo $this->Form->control('description');
            //echo $this->Form->control('phinxlog._ids', ['options' => $phinxlog]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
