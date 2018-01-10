<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ServiceDetail[]|\Cake\Collection\CollectionInterface $serviceDetail
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Service Detail'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Service'), ['controller' => 'Service', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Service', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="serviceDetail index large-9 medium-8 columns content">
    <h3><?= __('Service Detail') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('client_transaction_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($serviceDetail as $serviceDetail): ?>
            <tr>
                <td><?= $this->Number->format($serviceDetail->id) ?></td>
                <td><?= $serviceDetail->has('service') ? $this->Html->link($serviceDetail->service->name, ['controller' => 'Service', 'action' => 'view', $serviceDetail->service->id]) : '' ?></td>
                <td><?= $serviceDetail->has('employee') ? $this->Html->link($serviceDetail->employee->id, ['controller' => 'Employee', 'action' => 'view', $serviceDetail->employee->id]) : '' ?></td>
                <td><?= h($serviceDetail->service_date) ?></td>
                <td><?= $serviceDetail->has('client_transaction') ? $this->Html->link($serviceDetail->client_transaction->id, ['controller' => 'ClientTransaction', 'action' => 'view', $serviceDetail->client_transaction->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $serviceDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $serviceDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $serviceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
