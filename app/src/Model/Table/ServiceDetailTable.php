<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ServiceDetail Model
 *
 * @property \App\Model\Table\ServiceTable|\Cake\ORM\Association\BelongsTo $Service
 * @property \App\Model\Table\EmployeeTable|\Cake\ORM\Association\BelongsTo $Employee
 * @property \App\Model\Table\ClientTransactionTable|\Cake\ORM\Association\BelongsTo $ClientTransaction
 *
 * @method \App\Model\Entity\ServiceDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ServiceDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ServiceDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ServiceDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ServiceDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ServiceDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class ServiceDetailTable extends Table
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

        $this->setTable('service_detail');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Service', [
            'foreignKey' => 'service_id'
        ]);
        $this->belongsTo('Employee', [
            'foreignKey' => 'emp_id'
        ]);
        $this->belongsTo('ClientTransaction', [
            'foreignKey' => 'client_transaction_id'
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
            ->dateTime('service_date')
            ->allowEmpty('service_date');

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
        $rules->add($rules->existsIn(['service_id'], 'Service'));
        $rules->add($rules->existsIn(['emp_id'], 'Employee'));
        $rules->add($rules->existsIn(['client_transaction_id'], 'ClientTransaction'));

        return $rules;
    }
}
