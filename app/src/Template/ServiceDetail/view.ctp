<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceDetail $serviceDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service Detail'), ['action' => 'edit', $serviceDetail->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service Detail'), ['action' => 'delete', $serviceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceDetail->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Service Detail'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Detail'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Service', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Service', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="serviceDetail view large-9 medium-8 columns content">
    <h3><?= h($serviceDetail->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $serviceDetail->has('service') ? $this->Html->link($serviceDetail->service->name, ['controller' => 'Service', 'action' => 'view', $serviceDetail->service->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $serviceDetail->has('employee') ? $this->Html->link($serviceDetail->employee->id, ['controller' => 'Employee', 'action' => 'view', $serviceDetail->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Client Transaction') ?></th>
            <td><?= $serviceDetail->has('client_transaction') ? $this->Html->link($serviceDetail->client_transaction->id, ['controller' => 'ClientTransaction', 'action' => 'view', $serviceDetail->client_transaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($serviceDetail->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service Date') ?></th>
            <td><?= h($serviceDetail->service_date) ?></td>
        </tr>
    </table>
</div>
