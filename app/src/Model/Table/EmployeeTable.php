<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employee Model
 *
 * @property \App\Model\Table\BranchTable|\Cake\ORM\Association\BelongsTo $Branch
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeeTable extends Table
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

        $this->setTable('employee');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Branch', [
            'foreignKey' => 'branch_id'
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
            ->scalar('fn')
            ->maxLength('fn', 255)
            ->requirePresence('fn', 'create')
            ->notEmpty('fn');

        $validator
            ->scalar('mn')
            ->maxLength('mn', 255)
            ->requirePresence('mn', 'create')
            ->notEmpty('mn');

        $validator
            ->scalar('ln')
            ->maxLength('ln', 255)
            ->requirePresence('ln', 'create')
            ->notEmpty('ln');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmpty('address');

        $validator
            ->date('birthday')
            ->requirePresence('birthday', 'create')
            ->notEmpty('birthday');

        $validator
            ->scalar('con_num')
            ->maxLength('con_num', 11)
            ->requirePresence('con_num', 'create')
            ->notEmpty('con_num');

        $validator
            ->scalar('con_per')
            ->maxLength('con_per', 255)
            ->requirePresence('con_per', 'create')
            ->notEmpty('con_per');

        $validator
            ->scalar('con_per_num')
            ->maxLength('con_per_num', 11)
            ->requirePresence('con_per_num', 'create')
            ->notEmpty('con_per_num');

        $validator
            ->numeric('starting_salary')
            ->allowEmpty('starting_salary');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

        $validator
            ->scalar('username')
            ->maxLength('username', 255)
            ->requirePresence('username', 'create')
            ->notEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->integer('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['branch_id'], 'Branch'));

        return $rules;
    }
}
