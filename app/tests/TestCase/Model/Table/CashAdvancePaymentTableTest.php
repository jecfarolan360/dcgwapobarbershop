<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CashAdvancePaymentTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CashAdvancePaymentTable Test Case
 */
class CashAdvancePaymentTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CashAdvancePaymentTable
     */
    public $CashAdvancePayment;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cash_advance_payment',
        'app.cashier_cash_advance',
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
        $config = TableRegistry::exists('CashAdvancePayment') ? [] : ['className' => CashAdvancePaymentTable::class];
        $this->CashAdvancePayment = TableRegistry::get('CashAdvancePayment', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CashAdvancePayment);

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
