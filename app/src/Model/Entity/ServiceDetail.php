<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ServiceDetail Entity
 *
 * @property int $id
 * @property int $service_id
 * @property int $emp_id
 * @property \Cake\I18n\FrozenTime $service_date
 * @property int $client_transaction_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Employee $employee
 * @property \App\Model\Entity\ClientTransaction $client_transaction
 */
class ServiceDetail extends Entity
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
        'service_id' => true,
        'emp_id' => true,
        'service_date' => true,
        'client_transaction_id' => true,
        'service' => true,
        'employee' => true,
        'client_transaction' => true
    ];
}
