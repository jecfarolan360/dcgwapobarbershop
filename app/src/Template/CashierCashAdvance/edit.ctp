<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CashierCashAdvance $cashierCashAdvance
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cashierCashAdvance->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cashierCashAdvance->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Cashier Cash Advance'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cashierCashAdvance form large-9 medium-8 columns content">
    <?= $this->Form->create($cashierCashAdvance) ?>
    <fieldset>
        <legend><?= __('Edit Cashier Cash Advance') ?></legend>
        <?php
            echo $this->Form->control('emp_id', ['options' => $employee, 'empty' => true]);
            echo $this->Form->control('cash_advance_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
