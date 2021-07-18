<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top" role="navigation">
        <div class="container-fluid">
            <a class="navbar-brand" href=" <?= $this->Url->build(['action' => 'index', 'prefix' => false], true); ?> "><?= $this->fetch('title') ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                <?= $this->Html->link('login',['controller'=>'Users', 'action'=>'login','prefix'=>false],['escape'=>false,'class'=>'btn']) ?>
                <?= $this->Html->link('logout',['controller'=>'Users', 'action'=>'logout','prefix'=>false],['escape'=>false,'class'=>'btn btn-primary']) ?>
            </div>
        </div>
    </nav>