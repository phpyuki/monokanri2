<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <head>
        <?php
        // in the <head>
        echo $this->Html->css('BootstrapUI.bootstrap.min');
        echo $this->Html->script(['BootstrapUI.jquery.min', 'BootstrapUI.popper.min', 'BootstrapUI.bootstrap.min']);
        ?>
        <?= $this->Html->css('monokanri') ?>
        <script src="https://kit.fontawesome.com/31be5e76b2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>


        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 d-none d-md-block sidebar bg-dark text-white" id="sticky-sidebar">
                <?= $this->element('sidebar') ?>
            </div>
            <div class="col-md offset-md-2 p-0" class="height">
                <?= $this->element('header') ?>
                <?= $this->Flash->render() ?>
                <div class="main bg-light p-3">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
        </div>
    </div>
    <footer>
    </footer>
</body>

</html>