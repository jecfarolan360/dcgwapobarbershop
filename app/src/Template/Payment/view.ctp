<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Payment $payment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client Transaction'), ['controller' => 'ClientTransaction', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payment view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Client Transaction') ?></th>
            <td><?= $payment->has('client_transaction') ? $this->Html->link($payment->client_transaction->id, ['controller' => 'ClientTransaction', 'action' => 'view', $payment->client_transaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Amount') ?></th>
            <td><?= $this->Number->format($payment->payment_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Date') ?></th>
            <td><?= h($payment->payment_date) ?></td>
        </tr>
    </table>
</div>
