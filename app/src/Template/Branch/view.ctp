<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Branch $branch
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Branch'), ['action' => 'edit', $branch->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Branch'), ['action' => 'delete', $branch->id], ['confirm' => __('Are you sure you want to delete # {0}?', $branch->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Branch'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?> </li>

           <h3><?= h($branch->name) ?></h3>

    <div class="related">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($branch->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($branch->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?php
                if (($branch->status) == 0)
                {
                    echo "Open";
                }
                else if (($branch->status) == 1)
                {
                    echo "Renovation";
                }
                else if (($branch->status) == 2)
                {
                    echo "Closed";
                }
                else 
                {
                    echo "Out of Business";
                }
                ?></td>
        </tr>
    </table>
    </div>
    </ul>
</nav>
<div class="branch view large-9 medium-8 columns content">

        <h4><?= __('Related Employee') ?></h4>
        <?php if (!empty($branch->employee)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Full Name') ?></th>
                <th scope="col"><?= __('Address') ?></th>
                <th scope="col"><?= __('Birthday') ?></th>
                <th scope="col"><?= __('Con Num') ?></th>
                <th scope="col"><?= __('Position') ?></th>
                <th scope="col"><?= __('Status') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($branch->employee as $employee): ?>
            <tr>
                <td><?= h($employee->fn) ?> <?= h($employee->ln) ?></td>
                <td><?= h($employee->address) ?></td>
                <td><?= h($employee->birthday) ?></td>
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
                ?></td>
                <td><?php
                if (($employee->status) == 0)
                {
                    echo "Active";
                }
                else
                {
                    echo "Inactive";
                }
                ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Employee', 'action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Employee', 'action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Employee', 'action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>

</div>
