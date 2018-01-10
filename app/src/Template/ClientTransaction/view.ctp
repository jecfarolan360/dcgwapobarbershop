<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ClientTransaction $clientTransaction
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Client Transaction'), ['action' => 'edit', $clientTransaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client Transaction'), ['action' => 'delete', $clientTransaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientTransaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payment'), ['controller' => 'Payment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service Detail'), ['controller' => 'ServiceDetail', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientTransaction view large-9 medium-8 columns content">
    <h3><?= h($clientTransaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client') ?></th>
            <td><?= $clientTransaction->has('client') ? $this->Html->link($clientTransaction->client->name, ['controller' => 'Clients', 'action' => 'view', $clientTransaction->client->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($clientTransaction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Date') ?></th>
            <td><?= h($clientTransaction->transaction_date) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Payment') ?></h4>
        <?php if (!empty($clientTransaction->payment)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Client Transaction Id') ?></th>
                <th scope="col"><?= __('Payment Amount') ?></th>
                <th scope="col"><?= __('Payment Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($clientTransaction->payment as $payment): ?>
            <tr>
                <td><?= h($payment->id) ?></td>
                <td><?= h($payment->client_transaction_id) ?></td>
                <td><?= h($payment->payment_amount) ?></td>
                <td><?= h($payment->payment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payment', 'action' => 'view', $payment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payment', 'action' => 'edit', $payment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payment', 'action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Service Detail') ?></h4>
        <?php if (!empty($clientTransaction->service_detail)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Emp Id') ?></th>
                <th scope="col"><?= __('Service Date') ?></th>
                <th scope="col"><?= __('Client Transaction Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($clientTransaction->service_detail as $serviceDetail): ?>
            <tr>
                <td><?= h($serviceDetail->id) ?></td>
                <td><?= h($serviceDetail->service_id) ?></td>
                <td><?= h($serviceDetail->emp_id) ?></td>
                <td><?= h($serviceDetail->service_date) ?></td>
                <td><?= h($serviceDetail->client_transaction_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ServiceDetail', 'action' => 'view', $serviceDetail->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ServiceDetail', 'action' => 'edit', $serviceDetail->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ServiceDetail', 'action' => 'delete', $serviceDetail->id], ['confirm' => __('Are you sure you want to delete # {0}?', $serviceDetail->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
