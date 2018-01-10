<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Branch'), ['controller' => 'Branch', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branch', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employee view large-9 medium-8 columns content">
    <h3><?= h($employee->fn) ?> <?= h($employee->mn) ?> <?= h($employee->ln) ?></h3>
    <table class="vertical-table">
         <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($employee->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthday') ?></th>
            <td><?= h($employee->birthday) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Contact Number') ?></th>
            <td><?= h($employee->con_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Person Number') ?></th>
            <td><?= h($employee->con_per) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Person Number') ?></th>
            <td><?= h($employee->con_per_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($employee->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($employee->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $employee->has('branch') ? $this->Html->link($employee->branch->name, ['controller' => 'Branch', 'action' => 'view', $employee->branch->id]) : '' ?></td>
        </tr>
       
        <tr>
            <th scope="row"><?= __('Starting Salary') ?></th>
            <td><?= $this->Number->format($employee->starting_salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
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
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?php
                if (($employee->status) == 0)
                {
                    echo "Commissioned";
                }
                else
                {
                    echo "Decommissioned";
                }
                ?>
                    
            </td>
        </tr>
        </table>
</div>
