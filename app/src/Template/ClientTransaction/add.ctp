<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientTransaction $clientTransaction
 */
use Cake\I18n\Time;
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payment'), ['controller' => 'Payment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clientTransaction form large-9 medium-8 columns content">
    <?= $this->Form->create($clientTransaction) ?>
    <fieldset>
        <legend><?= __('Add Client Transaction') ?></legend>
        <?php
            echo $this->Form->control('client_id', ['options' => $clients, 'empty' => true]);
            //echo $this->Form->control('transaction_date', ['type' => 'hidden', 'value' => now()]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
