<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypetravauxsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypetravauxsTable Test Case
 */
class TypetravauxsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypetravauxsTable
     */
    public $Typetravauxs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typetravauxs',
        'app.Travauxs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typetravauxs') ? [] : ['className' => TypetravauxsTable::class];
        $this->Typetravauxs = TableRegistry::getTableLocator()->get('Typetravauxs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typetravauxs);

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
