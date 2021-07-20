<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top border-bottom p-3" role="navigation">
    <div class="container-fluid">
        <a class="navbar-brand" href=" <?= $this->Url->build(['controller' => 'spaces', 'action' => 'index', 'prefix' => false], true); ?> "><?= $this->fetch('title') ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mr-auto" style="width: 400px;">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                <button class="input-group-text" type="submit">Search</button>
            </div>
            <?php if ($authuser) {
                echo $this->Html->link('logout', ['controller' => 'Users', 'action' => 'logout', 'prefix' => false], ['escape' => false, 'class' => 'btn btn-primary']);
            } else {
                echo $this->Html->link('login', ['controller' => 'Users', 'action' => 'login', 'prefix' => false], ['escape' => false, 'class' => 'btn']);
            }
            ?>
        </div>
    </div>
</nav>