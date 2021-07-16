
<div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('ユーザ名とパスワードを入力してください') ?></legend>
        <?= $this->Form->input('username') ?>
        <?= $this->Form->control('password',['prepend' => '@','help' => 'Help text','tooltip' => 'パスワード']) ?>
    </fieldset>
    <?= $this->Form->button(__('Login')); ?>
    <?= $this->Form->end() ?>
</div>