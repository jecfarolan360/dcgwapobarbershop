<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\I18n\Time;

/**
 * ClientTransaction Model
 *
 * @property \App\Model\Table\ClientsTable|\Cake\ORM\Association\BelongsTo $Clients
 * @property \App\Model\Table\PaymentTable|\Cake\ORM\Association\HasMany $Payment
 * @property \App\Model\Table\ServiceDetailTable|\Cake\ORM\Association\HasMany $ServiceDetail
 *
 * @method \App\Model\Entity\ClientTransaction get($primaryKey, $options = [])
 * @method \App\Model\Entity\ClientTransaction newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ClientTransaction[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ClientTransaction|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ClientTransaction patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ClientTransaction[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ClientTransaction findOrCreate($search, callable $callback = null, $options = [])
 */
class ClientTransactionTable extends Table
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

        $this->setTable('client_transaction');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id'
        ]);
        $this->hasMany('Payment', [
            'foreignKey' => 'client_transaction_id'
        ]);
        $this->hasMany('ServiceDetail', [
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
            ->dateTime('transaction_date')
            //->isToday('transaction_date')
            ->allowEmpty('transaction_date');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
