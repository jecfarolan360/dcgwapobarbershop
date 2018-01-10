<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BranchTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BranchTable Test Case
 */
class BranchTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BranchTable
     */
    public $Branch;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.branch',
        'app.employee'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Branch') ? [] : ['className' => BranchTable::class];
        $this->Branch = TableRegistry::get('Branch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Branch);

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
}
