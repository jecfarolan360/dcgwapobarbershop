<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CashAdvancePayment Model
 *
 * @property \App\Model\Table\CashierCashAdvanceTable|\Cake\ORM\Association\BelongsTo $CashierCashAdvance
 *
 * @method \App\Model\Entity\CashAdvancePayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\CashAdvancePayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CashAdvancePayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CashAdvancePayment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CashAdvancePayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CashAdvancePayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CashAdvancePayment findOrCreate($search, callable $callback = null, $options = [])
 */
class CashAdvancePaymentTable extends Table
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

        $this->setTable('cash_advance_payment');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('CashierCashAdvance', [
            'foreignKey' => 'cash_advance_id'
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
            ->numeric('payment_amount')
            ->allowEmpty('payment_amount');

        $validator
            ->dateTime('payment_date')
            ->allowEmpty('payment_date');

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
        $rules->add($rules->existsIn(['cash_advance_id'], 'CashierCashAdvance'));

        return $rules;
    }
}
