<div class="row">
    <?php foreach ($categories as $category) : ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                        <?php if ($category->user_id == $authuser['id'] && !($category->parent_id)) : ?>
                        <h5 class="card-title"><?= $category->name ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <?= $this->Html->link('view', ['controller' => 'categories', 'action' => 'view', $category->id, 'prefix' => false], ['escape' => false, 'class' => '']) ?>
                        <?= $this->Html->link('要素を見る',['controller'=>'categories', 'action'=>'list',
                        $category->space_id, $category->id, 'prefix'=>false],['escape'=>false,'class'=>'']) ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endforeach; ?>
</div>