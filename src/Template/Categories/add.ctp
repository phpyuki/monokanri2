<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */

use Symfony\Component\VarDumper\VarDumper;

?>



<?= $this->Form->create($category) ?>
<fieldset>
    <legend><?= __('Add Category') ?></legend>
    <?php
    echo $this->Form->control('name');
    echo $this->Form->hidden('user_id', ['default' => $authuser['id']]);
    echo $this->Form->hidden('space_id', ['default' => $spaceId]);
    echo $this->Form->hidden('parent_id', ['default' => $categoryId, 'options' => $parentCategories]);
?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>