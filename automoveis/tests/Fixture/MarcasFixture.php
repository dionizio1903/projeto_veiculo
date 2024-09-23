<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MarcasFixture
 */
class MarcasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_marcas' => 1,
                'nome_marca' => 'Lorem ipsum dolor sit amet',
                'tipo' => 'Lorem ipsum dolor sit amet',
                'especie' => 'Lorem ipsum dolor sit amet',
                'carroceria' => 'Lorem ipsum dolor sit amet',
                'created' => '2024-09-21 03:41:40',
                'modified' => '2024-09-21 03:41:40',
            ],
        ];
        parent::init();
    }
}
