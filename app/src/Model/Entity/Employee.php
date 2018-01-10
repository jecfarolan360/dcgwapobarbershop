<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Employee Entity
 *
 * @property int $id
 * @property string $fn
 * @property string $mn
 * @property string $ln
 * @property string $address
 * @property \Cake\I18n\FrozenTime $birthday
 * @property string $con_num
 * @property string $con_per
 * @property string $con_per_num
 * @property float $starting_salary
 * @property int $position
 * @property string $username
 * @property string $password
 * @property int $branch_id
 *
 * @property \App\Model\Entity\Branch $branch
 */
class Employee extends Entity
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
        'fn' => true,
        'mn' => true,
        'ln' => true,
        'address' => true,
        'birthday' => true,
        'con_num' => true,
        'con_per' => true,
        'con_per_num' => true,
        'starting_salary' => true,
        'position' => true,
        'username' => true,
        'password' => true,
        'branch_id' => true,
        'branch' => true,
        'status' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
