<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ServiceDetailFixture
 *
 */
class ServiceDetailFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'service_detail';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'service_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'emp_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'service_date' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'client_transaction_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'service_id' => ['type' => 'index', 'columns' => ['service_id'], 'length' => []],
            'emp_id' => ['type' => 'index', 'columns' => ['emp_id'], 'length' => []],
            'client_transaction_id' => ['type' => 'index', 'columns' => ['client_transaction_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'service_detail_ibfk_1' => ['type' => 'foreign', 'columns' => ['service_id'], 'references' => ['service', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'service_detail_ibfk_2' => ['type' => 'foreign', 'columns' => ['emp_id'], 'references' => ['employee', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'service_detail_ibfk_3' => ['type' => 'foreign', 'columns' => ['client_transaction_id'], 'references' => ['client_transaction', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'service_id' => 1,
            'emp_id' => 1,
            'service_date' => '2018-01-09 01:38:26',
            'client_transaction_id' => 1
        ],
    ];
}
