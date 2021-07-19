<div class="sidebar-sticky">
    <ul class="nav flex-column mb-auto">
        <li class="nav-item"><?= $this->Html->link(__('List Spaces'), ['controller' => 'Spaces', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New Spaces'), ['controller' => 'Spaces', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index'], ['class' => 'nav-link']) ?></li>
        <li class="nav-item"><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add'], ['class' => 'nav-link']) ?></li>
    </ul>

    <div class="dropdown mx-3 mt-auto">
        <?php
        if (!empty($authuser)) {
            echo  '<p>' . $authuser['username'] . '</p>';
        } else {
        } ?>

    </div>
</div>