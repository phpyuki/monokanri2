<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space[]|\Cake\Collection\CollectionInterface $spaces
 */
?>
<?= $this->Html->link('新しいスペースを追加', ['controller' => 'spaces', 'action' => 'add', 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary mb-3']) ?>

<div id="app">
    <input v-model="message" placeholder="edit me">
    <p> {{message}} </p>
</div>

<div class="container-fluid">
    <div class="row">
        <?php foreach ($spaces as $space) : ?>
            <?php if ($space->user_id == $authuser['id']) : ?>
                <div class="col-6">
                    <div class="card mb-3">
                        <div class="card-header">
                            <?= $space->name ?>
                        </div>
                        <div class="card-body">
                            <?php if ($space->items) : ?>
                                <p class="text"><strong><?= count($space->items) ?></strong>個のアイテムがあります</p>
                            <?php else : ?>
                                <p>何もありません!</p>

                            <?php endif ?>
                            <?= $this->Html->link('見る', ['controller' => 'categories', 'action' => 'list', $space->id, 'prefix' => false], ['escape' => false, 'class' => 'btn-outline-secondary btn btn-block']) ?>
                            <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>
<div class="paginator mt-3">
    <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
    </ul>
    <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div>

<div class="spaces index large-9 medium-8 columns content">
    <h3><?= __('Spaces') ?></h3>
    <table class="table" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($spaces as $space) : ?>
                <tr>
                    <td><?= $this->Number->format($space->id) ?></td>
                    <td><?= h($space->name) ?></td>
                    <td><?= $space->has('user') ? $this->Html->link($space->user->id, ['controller' => 'Users', 'action' => 'view', $space->user->id]) : '' ?></td>
                    <td><?= h($space->created) ?></td>
                    <td><?= h($space->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $space->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $space->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $space->id], ['confirm' => __('Are you sure you want to delete # {0}?', $space->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>