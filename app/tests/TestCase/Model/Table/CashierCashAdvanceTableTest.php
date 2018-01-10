<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CashierCashAdvanceTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CashierCashAdvanceTable Test Case
 */
class CashierCashAdvanceTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CashierCashAdvanceTable
     */
    public $CashierCashAdvance;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('CashierCashAdvance') ? [] : ['className' => CashierCashAdvanceTable::class];
        $this->CashierCashAdvance = TableRegistry::get('CashierCashAdvance', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CashierCashAdvance);

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
