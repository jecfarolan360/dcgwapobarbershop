<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClientTransactionTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClientTransactionTable Test Case
 */
class ClientTransactionTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ClientTransactionTable
     */
    public $ClientTransaction;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.client_transaction',
        'app.clients',
        'app.payment',
        'app.service_detail'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ClientTransaction') ? [] : ['className' => ClientTransactionTable::class];
        $this->ClientTransaction = TableRegistry::get('ClientTransaction', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ClientTransaction);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
