<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CashAdvancePayment $cashAdvancePayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cash Advance Payment'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cashAdvancePayment form large-9 medium-8 columns content">
    <?= $this->Form->create($cashAdvancePayment) ?>
    <fieldset>
        <legend><?= __('Add Cash Advance Payment') ?></legend>
        <?php
            echo $this->Form->control('cash_advance_id', ['options' => $cashierCashAdvance, 'empty' => true]);
            echo $this->Form->control('payment_amount');
            echo $this->Form->control('payment_date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
