<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Item $item
 */
?>

<div class="items view large-9 medium-8 columns content">
    <h3><?= h($item->name) ?></h3>
    <table class="table table-sm table-borderd">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $item->has('user') ? $this->Html->link($item->user->id, ['controller' => 'Users', 'action' => 'view', $item->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Space') ?></th>
            <td><?= $item->has('space') ? $this->Html->link($item->space->name, ['controller' => 'Spaces', 'action' => 'view', $item->space->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Category') ?></th>
            <td><?= $item->has('category') ? $this->Html->link($item->category->name, ['controller' => 'Categories', 'action' => 'view', $item->category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($item->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($item->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($item->modified) ?></td>
        </tr>
    </table>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Memo</h5>
            <p class="card-text"><?= $this->Text->autoParagraph(h($item->memo),); ?></p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
        </div>
    </div>
</div>