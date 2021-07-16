<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Add Item') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('memo');
            echo $this->Form->hidden('user_id', ['value' => $authuser['id']]);
            echo $this->Form->control('space_id', ['options' => $spaces]);
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
