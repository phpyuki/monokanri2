<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>

<div class="items form large-9 medium-8 columns content">
    <?= $this->Form->create($item) ?>
    <fieldset>
        <legend><?= __('Edit Item') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('memo');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('space_id', ['options' => $spaces]);
            echo $this->Form->control('category_id', ['options' => $categories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
