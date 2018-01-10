<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AttendanceLog[]|\Cake\Collection\CollectionInterface $attendanceLogs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Attendance Log'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employee'), ['controller' => 'Employee', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['controller' => 'Employee', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="attendanceLogs index large-9 medium-8 columns content">
    <h3><?= __('Attendance Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emp_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_in') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_out') ?></th>
                <th scope="col"><?= $this->Paginator->sort('attendance_log_time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($attendanceLogs as $attendanceLog): ?>
            <tr>
                <td><?= $this->Number->format($attendanceLog->id) ?></td>
                <td><?= $attendanceLog->has('employee') ? $this->Html->link($attendanceLog->employee->id, ['controller' => 'Employee', 'action' => 'view', $attendanceLog->employee->id]) : '' ?></td>
                <td><?= h($attendanceLog->time_in) ?></td>
                <td><?= h($attendanceLog->time_out) ?></td>
                <td><?= h($attendanceLog->attendance_log_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $attendanceLog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $attendanceLog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $attendanceLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendanceLog->id)]) ?>
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
