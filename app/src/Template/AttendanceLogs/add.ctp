<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AttendanceLog $attendanceLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Attendance Logs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendanceLogs form large-9 medium-8 columns content">
    <?= $this->Form->create($attendanceLog) ?>
    <fieldset>
        <legend><?= __('Add Attendance Log') ?></legend>
        <?php
            echo $this->Form->control('emp_id', ['options' => $employee, 'empty' => true]);
            echo $this->Form->control('time_in', ['empty' => true]);
            echo $this->Form->control('time_out', ['empty' => true]);
            echo $this->Form->control('attendance_log_time', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
