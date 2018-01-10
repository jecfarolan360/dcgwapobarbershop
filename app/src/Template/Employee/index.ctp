<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employee
 */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Branch'), ['controller' => 'Branch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employee index large-10 medium-10 columns content">
    <h3><?= __('Employee') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Full Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Contact Number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Branch') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employee as $employee): ?>
            <tr>
                <td><?= h($employee->fn) ?> <?= h($employee->ln) ?></td>
                <td><?= h($employee->address) ?></td>
                <td><?= h($employee->con_num) ?></td>
                <td><?php
                if (($employee->position) == 0)
                {
                    echo "Admin";
                }
                else if (($employee->position) == 1)
                {
                    echo "Cashier";
                }
                else
                {
                    echo "Barber";
                }
                ?>   
                </td>
                <td><?php
                if (($employee->status) == 0)
                {
                    echo "Commssioned";
                }
                else
                {
                    echo "Decommissioned";
                }
                ?></td>

                <td><?= $employee->has('branch') ? $this->Html->link($employee->branch->name, ['controller' => 'Branch', 'action' => 'view', $employee->branch->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>
