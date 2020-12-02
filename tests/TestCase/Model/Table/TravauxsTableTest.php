<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TravauxsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TravauxsTable Test Case
 */
class TravauxsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TravauxsTable
     */
    public $Travauxs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Travauxs',
        'app.Routes',
        'app.Typetravauxs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Travauxs') ? [] : ['className' => TravauxsTable::class];
        $this->Travauxs = TableRegistry::getTableLocator()->get('Travauxs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Travauxs);

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
