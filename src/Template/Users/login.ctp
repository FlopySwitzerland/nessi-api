<?php
/**
 * @var \App\View\AppView $this
 */

$this->assign('bodyClass', 'signin-page');
?>
<span class="card-title">Log In</span>
<div class="row">
    <?= $this->Form->create(null, ['class' => 'col s12']) ?>
    <div class="input-field col s12">
        <?= $this->Form->control('email') ?>
    </div>
    <div class="input-field col s12">
        <?= $this->Form->control('password') ?>
    </div>
    <div class="input-field col s12">
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'forgot', 'prefix' => false, 'plugin' => false]) ?>" class="">I've forgot my password</a>
    </div>
    <div class="col s12 right-align m-t-sm">
        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'register', 'prefix' => false, 'plugin' => false]) ?>" class="waves-effect waves-grey btn-flat">sign up</a>
        <?= $this->Form->button(__('Login'), ['class' => 'waves-effect waves-light btn teal']); ?>
    </div>
    <?= $this->Form->end() ?>
</div>