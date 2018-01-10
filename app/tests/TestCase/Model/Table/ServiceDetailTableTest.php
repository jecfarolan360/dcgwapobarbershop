<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiceDetailTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiceDetailTable Test Case
 */
class ServiceDetailTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiceDetailTable
     */
    public $ServiceDetail;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.service_detail',
        'app.service',
        'app.employee',
        'app.branch',
        'app.client_transaction',
        'app.clients',
        'app.payment'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ServiceDetail') ? [] : ['className' => ServiceDetailTable::class];
        $this->ServiceDetail = TableRegistry::get('ServiceDetail', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ServiceDetail);

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
