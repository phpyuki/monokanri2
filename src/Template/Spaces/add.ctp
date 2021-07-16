<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space $space
 */

use Symfony\Component\VarDumper\VarDumper;

?>
<div class="spaces form large-9 medium-8 columns content">
    <?= $this->Form->create($space) ?>
    <fieldset>
        <legend><?= __('Add Space') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->hidden('user_id', ['value'=>$authuser['id']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'),['class' => 'btn']) ?>
    <?= $this->Form->end() ?>
</div>
