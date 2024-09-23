<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VeiculosFixture
 */
class VeiculosFixture extends TestFixture
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
                'id_veiculos' => 1,
                'nome_veiculo' => 'Lorem ipsum dolor sit amet',
                'ano' => '2024-09-21',
                'combustivel' => 'Lorem ipsum dolor sit amet',
                'marca_id' => 1,
                'created' => '2024-09-21 15:40:11',
                'modified' => '2024-09-21 15:40:11',
            ],
        ];
        parent::init();
    }
}
