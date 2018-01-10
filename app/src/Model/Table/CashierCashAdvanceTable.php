<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CashierCashAdvance Model
 *
 * @property \App\Model\Table\EmployeeTable|\Cake\ORM\Association\BelongsTo $Employee
 *
 * @method \App\Model\Entity\CashierCashAdvance get($primaryKey, $options = [])
 * @method \App\Model\Entity\CashierCashAdvance newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CashierCashAdvance[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CashierCashAdvance|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CashierCashAdvance patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CashierCashAdvance[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CashierCashAdvance findOrCreate($search, callable $callback = null, $options = [])
 */
class CashierCashAdvanceTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('cashier_cash_advance');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Employee', [
            'foreignKey' => 'emp_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->numeric('cash_advance_amount')
            ->allowEmpty('cash_advance_amount');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['emp_id'], 'Employee'));

        return $rules;
    }
}
