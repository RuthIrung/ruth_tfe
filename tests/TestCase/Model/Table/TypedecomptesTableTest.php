<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypedecomptesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypedecomptesTable Test Case
 */
class TypedecomptesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypedecomptesTable
     */
    public $Typedecomptes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typedecomptes',
        'app.Comptes',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typedecomptes') ? [] : ['className' => TypedecomptesTable::class];
        $this->Typedecomptes = TableRegistry::getTableLocator()->get('Typedecomptes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typedecomptes);

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
