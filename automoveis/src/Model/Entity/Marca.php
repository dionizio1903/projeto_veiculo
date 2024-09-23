<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Marca Entity
 *
 * @property int $id_marcas
 * @property string|null $nome_marca
 * @property string|null $tipo
 * @property string|null $especie
 * @property string|null $carroceria
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Veiculo[] $veiculos
 */
class Marca extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'nome_marca' => true,
        'tipo' => true,
        'especie' => true,
        'carroceria' => true,
        'created' => true,
        'modified' => true,
        'veiculos' => true,
    ];
}
