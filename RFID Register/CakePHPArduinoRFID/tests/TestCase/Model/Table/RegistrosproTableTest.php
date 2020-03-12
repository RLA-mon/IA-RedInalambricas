<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RegistrosproTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RegistrosproTable Test Case
 */
class RegistrosproTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RegistrosproTable
     */
    public $Registrospro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Registrospro',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Registrospro') ? [] : ['className' => RegistrosproTable::class];
        $this->Registrospro = TableRegistry::getTableLocator()->get('Registrospro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Registrospro);

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
