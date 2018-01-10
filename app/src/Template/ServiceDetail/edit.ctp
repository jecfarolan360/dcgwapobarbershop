<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceDetail $serviceDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $serviceDetail->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $serviceDetail->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Service Detail'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Service', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Service', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="serviceDetail form large-9 medium-8 columns content">
    <?= $this->Form->create($serviceDetail) ?>
    <fieldset>
        <legend><?= __('Edit Service Detail') ?></legend>
        <?php
            echo $this->Form->control('service_id', ['options' => $service, 'empty' => true]);
            echo $this->Form->control('emp_id', ['options' => $employee, 'empty' => true]);
            echo $this->Form->control('service_date', ['empty' => true]);
            echo $this->Form->control('client_transaction_id', ['options' => $clientTransaction, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
