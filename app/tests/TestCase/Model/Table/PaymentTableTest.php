<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaymentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaymentTable Test Case
 */
class PaymentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PaymentTable
     */
    public $Payment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.payment',
        'app.client_transaction',
        'app.clients',
        'app.service_detail',
        'app.service',
        'app.employee',
        'app.branch'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Payment') ? [] : ['className' => PaymentTable::class];
        $this->Payment = TableRegistry::get('Payment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Payment);

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
