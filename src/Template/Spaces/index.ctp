<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Space[]|\Cake\Collection\CollectionInterface $spaces
 */
?>

<?php foreach ($spaces as $space){
    if ($space->user_id == $authuser['id']) {
        echo $this->Html->link($space->name,['controller'=>'categories', 'action'=>'list', $space->id,'prefix'=>false],['escape'=>false,'class'=>'btn-outline-secondary btn']);
    }
}
?>
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
            <?php foreach ($spaces as $space): ?>
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
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
