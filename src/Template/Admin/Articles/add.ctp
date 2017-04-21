<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('title');
//            echo $this->Form->control('body');
//            echo $this->Form->control('category');
//            echo $this->Form->control('featured');
//            echo $this->Form->create('Article', ['type' => 'file']);
//            echo $this->Form->input('Article.image', ['type' => 'file']);
//            echo $this->Form->input('Article.image_dir', ['type' => 'hidden']);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
