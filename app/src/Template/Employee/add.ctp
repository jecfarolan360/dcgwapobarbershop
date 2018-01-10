<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Branch'), ['controller' => 'Branch', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Branch'), ['controller' => 'Branch', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employee form large-9 medium-8 columns content">
    <?= $this->Form->create($employee) ?>
    <fieldset>
        <legend><?= __('Add Employee') ?></legend>
        <?php
            echo $this->Form->control('fn', [
            'label' => [
                'text' => 'First Name']
            ]);
            echo $this->Form->control('mn', [
            'label' => [
                'text' => 'Middle Name']
            ]);
            echo $this->Form->control('ln', [
            'label' => [
                'text' => 'Last Name']
            ]);
            echo $this->Form->control('address', [
            'label' => [
                'text' => 'Address']
            ]);
            echo $this->Form->control('birthday', [
            'label' => [
                'text' => 'Birthday']
            ]);
            echo $this->Form->control('con_num', [
            'label' => [
                'text' => 'Contact Number']
            ]);
            echo $this->Form->control('con_per', [
            'label' => [
                'text' => 'Contact Person']
            ]);
            echo $this->Form->control('con_per_num', [
            'label' => [
                'text' => 'Contact Person Number']
            ]);
            echo $this->Form->control('starting_salary', [
            'label' => [
                'text' => 'Starting Salary']
            ]);
            echo 'Position';
            echo $this->Form->select('position', [0 => 'Admin', 1 => 'Cashier', 2 => 'Barber'], ['empty' => true], [
            'label' => [
                'text' => 'Position']
            ]);
            echo $this->Form->control('username', [
            'label' => [
                'text' => 'Username']
            ]);
            echo $this->Form->control('password', [
            'label' => [
                'text' => 'Password']
            ]);
            echo $this->Form->control('branch_id', ['options' => $branch, 'empty' => true]);
            echo $this->Form->control('status', ['type' => 'hidden', 'value' => 0]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
