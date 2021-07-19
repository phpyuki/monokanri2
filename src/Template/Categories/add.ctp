<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */

use Symfony\Component\VarDumper\VarDumper;

?>

<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Add Category') ?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->hidden('user_id', ['value' => $authuser['id']]);
        echo $this->Form->hidden('space_id', ['value' => $spaces->id]);
        if ($parentCategories) {
            echo $this->Form->control('parent_id', ['value' => $parentCategories->id, 'empty' => true]);
        }
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>