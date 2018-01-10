<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CashAdvancePayment $cashAdvancePayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cash Advance Payment'), ['action' => 'edit', $cashAdvancePayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cash Advance Payment'), ['action' => 'delete', $cashAdvancePayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashAdvancePayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cash Advance Payment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cash Advance Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cashAdvancePayment view large-9 medium-8 columns content">
    <h3><?= h($cashAdvancePayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cashier Cash Advance') ?></th>
            <td><?= $cashAdvancePayment->has('cashier_cash_advance') ? $this->Html->link($cashAdvancePayment->cashier_cash_advance->id, ['controller' => 'CashierCashAdvance', 'action' => 'view', $cashAdvancePayment->cashier_cash_advance->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cashAdvancePayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Amount') ?></th>
            <td><?= $this->Number->format($cashAdvancePayment->payment_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Date') ?></th>
            <td><?= h($cashAdvancePayment->payment_date) ?></td>
        </tr>
    </table>
</div>
