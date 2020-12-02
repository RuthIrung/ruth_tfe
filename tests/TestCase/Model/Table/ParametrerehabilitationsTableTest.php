<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ParametrerehabilitationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ParametrerehabilitationsTable Test Case
 */
class ParametrerehabilitationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ParametrerehabilitationsTable
     */
    public $Parametrerehabilitations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Parametrerehabilitations',
        'app.Routeparametrerehabilitations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Parametrerehabilitations') ? [] : ['className' => ParametrerehabilitationsTable::class];
        $this->Parametrerehabilitations = TableRegistry::getTableLocator()->get('Parametrerehabilitations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Parametrerehabilitations);

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
