<div class="container-sm">
    <div class="row">
        <div class="col-sm">
            <h1>
                <?php if ($currentPlace) {
                    echo $currentPlace->name;
                } ?>
            </h1>
        </div>
        <div class="col-sm text-center">
            <?= $this->Html->link('カテゴリーを追加', ['controller' => 'categories', 'action' => 'add', $currentPlace->space_id, $currentPlace->id, 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary']) ?>
            <?= $this->Html->link('アイテムを追加', ['controller' => 'items', 'action' => 'add', $currentPlace->space_id, $currentPlace->id, 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary']) ?>
        </div>
    </div>
</div>


<table class="table table-hover" cellpadding="0" cellspacing="0">
    <thead>
        <tr >
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col" style="width: 30%;"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $this->Number->format($category->id) ?></td>
                <td><?= h($category->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $category->id], ['class' => 'btn btn-success']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'btn btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<div class="row">
    <?php foreach ($categories as $category) : ?>
        <?php if ($category->user_id == $authuser['id'] or $category->child_categories) : ?>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title"><?= $category->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <?php if ($category->child_categories) : ?>
                            <div class="dropdown">
                                <button type="button" id="dropdown1" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= $category->name ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdown1">
                                    <?php foreach ($category->child_categories as $child) : ?>
                                        <?= $this->Html->link($child->name, ['controller' => 'categories', 'action' => 'list', $child->space_id, $child->id, 'prefix' => false], ['escape' => false, 'class' => 'dropdown-item']) ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if ($category->items) : ?>
                            <?php foreach ($category->items as $item) : ?>
                                <p class="card-text"><?= $item->name ?></p>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?= $this->Html->link('view', ['controller' => 'categories', 'action' => 'view', $category->id, 'prefix' => false], ['escape' => false, 'class' => '']) ?>
                        <?= $this->Html->link('要素を見る', [
                            'controller' => 'categories', 'action' => 'list',
                            $category->space_id, $category->id, 'prefix' => false
                        ], ['escape' => false, 'class' => 'text-secondary stretched-link']) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- <?php print_r($category) ?> -->
    <?php endforeach; ?>
</div>