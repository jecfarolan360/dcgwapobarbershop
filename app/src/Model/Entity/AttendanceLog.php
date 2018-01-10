<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AttendanceLog Entity
 *
 * @property int $id
 * @property int $emp_id
 * @property \Cake\I18n\FrozenTime $time_in
 * @property \Cake\I18n\FrozenTime $time_out
 * @property \Cake\I18n\FrozenTime $attendance_log_time
 *
 * @property \App\Model\Entity\Employee $employee
 */
class AttendanceLog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'emp_id' => true,
        'time_in' => true,
        'time_out' => true,
        'attendance_log_time' => true,
        'employee' => true
    ];
}
