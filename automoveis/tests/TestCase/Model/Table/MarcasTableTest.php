<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MarcasTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MarcasTable Test Case
 */
class MarcasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MarcasTable
     */
    protected $Marcas;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Marcas',
        'app.Veiculos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Marcas') ? [] : ['className' => MarcasTable::class];
        $this->Marcas = $this->getTableLocator()->get('Marcas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Marcas);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\MarcasTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
