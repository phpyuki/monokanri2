<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Item') ?></legend>
        <?php
        echo $this->Form->control('name');
        echo $this->Form->control('memo');
        echo $this->Form->hidden('user_id', ['value' => $authuser['id']]);
        echo $this->Form->hidden('space_id', ['value' => $spaceId]);
        echo $this->Form->hidden('category_id', ['value' => $categoryId, 'empty' => true]);
        echo $this->Form->file('image');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'mt-3']) ?>
    <?= $this->Form->end() ?>
</div>