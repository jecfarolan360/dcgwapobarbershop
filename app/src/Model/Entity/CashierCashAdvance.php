<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CashierCashAdvance Entity
 *
 * @property int $id
 * @property int $emp_id
 * @property float $cash_advance_amount
 *
 * @property \App\Model\Entity\Employee $employee
 */
class CashierCashAdvance extends Entity
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
        'cash_advance_amount' => true,
        'employee' => true
    ];
}
