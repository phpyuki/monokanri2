<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SpacesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SpacesTable Test Case
 */
class SpacesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SpacesTable
     */
    public $Spaces;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Spaces',
        'app.Users',
        'app.Categories',
        'app.Items',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Spaces') ? [] : ['className' => SpacesTable::class];
        $this->Spaces = TableRegistry::getTableLocator()->get('Spaces', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Spaces);

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
