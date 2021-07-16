<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space $space
 */
?>

<div class="spaces form large-9 medium-8 columns content">
    <?= $this->Form->create($space) ?>
    <fieldset>
        <legend><?= __('Edit Space') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
