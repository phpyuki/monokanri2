<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<div class="categories form large-9 medium-8 columns content">
    <?= $this->Form->create($category) ?>
    <fieldset>
        <legend><?= __('Edit Category') ?></legend>
        <?php
            echo $this->Form->control('name',['label' => '名前']);
            echo $this->Form->hidden('user_id', ['default' => $authuser['id']]);
            echo $this->Form->control('space_id', ['label' => '場所' ,'options' => $spaces]);
            echo $this->Form->control('parent_id', ['label'=> '親カテゴリー','options' => $parentCategories, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
