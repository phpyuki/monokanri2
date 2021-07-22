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

<div class="card-deck">
    <?php foreach ($items as $item) : ?>
        <div class="card" style="max-width:15rem;">
            <?= $this->Html->image($item->image, ['class' => 'card-img-top', 'alt' => 'textalternatif', 'width' => '100', 'height' => '100']) ?>
            <div class="card-body">
                <h4 class="card-title"><?= h($item->name) ?></h4>
                <p class="card-text"><?= h($item->memo) ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</ul>

<table class="table table-hover" cellpadding="0" cellspacing="0">
    <!-- <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col" style="width: 30%;"><?= __('Actions') ?></th>
        </tr>
    </thead> -->
    <tbody>
        <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?= $category->name ?></td>
                <td>
                    <?php if ($category->child_categories) : ?>
                        <div class="dropdown">
                            <button type="button" id="dropdown1" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                サブカテゴリーを見る
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdown1">
                                <?php foreach ($category->child_categories as $child) : ?>
                                    <?= $this->Html->link($child->name, ['controller' => 'categories', 'action' => 'list', $child->space_id, $child->id, 'prefix' => false], ['escape' => false, 'class' => 'dropdown-item']) ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php else : ?>
                        何もありません
                    <?php endif; ?>
                </td>
                <td class="text-right" style="width:50%">
                    <?= $this->Html->link('見る', [
                        'controller' => 'categories', 'action' => 'list',
                        $category->space_id, $category->id, 'prefix' => false
                    ], ['escape' => false, 'class' => 'btn-success btn mr-auto']) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $category->space_id, $category->id], ['class' => 'btn btn-primary']) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => 'btn btn-danger']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>