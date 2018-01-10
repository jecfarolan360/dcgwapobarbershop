<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CashierCashAdvance $cashierCashAdvance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cashier Cash Advance'), ['action' => 'edit', $cashierCashAdvance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cashier Cash Advance'), ['action' => 'delete', $cashierCashAdvance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashierCashAdvance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cashier Cash Advance'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cashier Cash Advance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cashierCashAdvance view large-9 medium-8 columns content">
    <h3><?= h($cashierCashAdvance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $cashierCashAdvance->has('employee') ? $this->Html->link($cashierCashAdvance->employee->id, ['controller' => 'Employee', 'action' => 'view', $cashierCashAdvance->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cashierCashAdvance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cash Advance Amount') ?></th>
            <td><?= $this->Number->format($cashierCashAdvance->cash_advance_amount) ?></td>
        </tr>
    </table>
</div>
