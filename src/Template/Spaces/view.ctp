<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space $space
 */
?>

<div class="spaces view large-9 medium-8 columns content">
    <h3><?= h($space->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($space->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $space->has('user') ? $this->Html->link($space->user->id, ['controller' => 'Users', 'action' => 'view', $space->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($space->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($space->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($space->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Categories') ?></h4>
        <?php if (!empty($space->categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Space Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($space->categories as $categories): ?>
            <tr>
                <td><?= h($categories->id) ?></td>
                <td><?= h($categories->name) ?></td>
                <td><?= h($categories->user_id) ?></td>
                <td><?= h($categories->space_id) ?></td>
                <td><?= h($categories->parent_id) ?></td>
                <td><?= h($categories->created) ?></td>
                <td><?= h($categories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($space->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Memo') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Space Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($space->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->memo) ?></td>
                <td><?= h($items->user_id) ?></td>
                <td><?= h($items->space_id) ?></td>
                <td><?= h($items->category_id) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
