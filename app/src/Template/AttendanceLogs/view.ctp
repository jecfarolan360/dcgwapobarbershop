<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AttendanceLog $attendanceLog
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendance Log'), ['action' => 'edit', $attendanceLog->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendance Log'), ['action' => 'delete', $attendanceLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendanceLog->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendance Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendance Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendanceLogs view large-9 medium-8 columns content">
    <h3><?= h($attendanceLog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employee') ?></th>
            <td><?= $attendanceLog->has('employee') ? $this->Html->link($attendanceLog->employee->id, ['controller' => 'Employee', 'action' => 'view', $attendanceLog->employee->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendanceLog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time In') ?></th>
            <td><?= h($attendanceLog->time_in) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time Out') ?></th>
            <td><?= h($attendanceLog->time_out) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attendance Log Time') ?></th>
            <td><?= h($attendanceLog->attendance_log_time) ?></td>
        </tr>
    </table>
</div>
