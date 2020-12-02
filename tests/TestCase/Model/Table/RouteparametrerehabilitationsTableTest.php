<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RouteparametrerehabilitationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RouteparametrerehabilitationsTable Test Case
 */
class RouteparametrerehabilitationsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RouteparametrerehabilitationsTable
     */
    public $Routeparametrerehabilitations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Routeparametrerehabilitations',
        'app.Routes',
        'app.Parametrerehabilitations',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Routeparametrerehabilitations') ? [] : ['className' => RouteparametrerehabilitationsTable::class];
        $this->Routeparametrerehabilitations = TableRegistry::getTableLocator()->get('Routeparametrerehabilitations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Routeparametrerehabilitations);

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
