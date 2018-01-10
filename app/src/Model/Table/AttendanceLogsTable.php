<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AttendanceLogs Model
 *
 * @property \App\Model\Table\EmployeeTable|\Cake\ORM\Association\BelongsTo $Employee
 *
 * @method \App\Model\Entity\AttendanceLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\AttendanceLog newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AttendanceLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AttendanceLog|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AttendanceLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AttendanceLog[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AttendanceLog findOrCreate($search, callable $callback = null, $options = [])
 */
class AttendanceLogsTable extends Table
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

        $this->setTable('attendance_logs');
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
            ->dateTime('time_in')
            ->allowEmpty('time_in');

        $validator
            ->dateTime('time_out')
            ->allowEmpty('time_out');

        $validator
            ->time('attendance_log_time')
            ->allowEmpty('attendance_log_time');

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
