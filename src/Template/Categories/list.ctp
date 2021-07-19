<h1><?php if ($currentPlace) {
        echo $currentPlace->name;
    } ?></h1>
<div class="container">
    <div class="row row-eq-height">
        <?php foreach ($items as $item) : ?>
            <div class="col-3">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <div class="card-body ">
                        <h5 class="card-title text-primary"><?= $this->Html->link($item->name, ['controller' => 'items', 'action' => 'view', $item->id, 'prefix' => false], ['escape' => false, 'class' => '']) ?></h5>
                        <p class="card-text"><?= $item->memo ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<div class="container">
    <?= $this->Html->link('カテゴリーを追加', ['controller' => 'categories', 'action' => 'add', $currentPlace->space_id,$currentPlace->id, 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary']) ?>
    <?= $this->Html->link('アイテムを追加', ['controller' => 'items', 'action' => 'add', 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary']) ?>
</div>

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
                                    Dropdown button
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
                        ], ['escape' => false, 'class' => '']) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- <?php print_r($category) ?> -->
    <?php endforeach; ?>
</div>