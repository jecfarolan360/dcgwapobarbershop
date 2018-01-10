<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CashAdvancePayment[]|\Cake\Collection\CollectionInterface $cashAdvancePayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cash Advance Payment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cashier Cash Advance'), ['controller' => 'CashierCashAdvance', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cashAdvancePayment index large-9 medium-8 columns content">
    <h3><?= __('Cash Advance Payment') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cash_advance_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cashAdvancePayment as $cashAdvancePayment): ?>
            <tr>
                <td><?= $this->Number->format($cashAdvancePayment->id) ?></td>
                <td><?= $cashAdvancePayment->has('cashier_cash_advance') ? $this->Html->link($cashAdvancePayment->cashier_cash_advance->id, ['controller' => 'CashierCashAdvance', 'action' => 'view', $cashAdvancePayment->cashier_cash_advance->id]) : '' ?></td>
                <td><?= $this->Number->format($cashAdvancePayment->payment_amount) ?></td>
                <td><?= h($cashAdvancePayment->payment_date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cashAdvancePayment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cashAdvancePayment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cashAdvancePayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cashAdvancePayment->id)]) ?>
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
