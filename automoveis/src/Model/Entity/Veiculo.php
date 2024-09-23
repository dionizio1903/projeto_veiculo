<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Veiculo Entity
 *
 * @property int $id_veiculos
 * @property string|null $nome_veiculo
 * @property \Cake\I18n\Date|null $ano
 * @property string|null $combustivel
 * @property int|null $marca_id
 * @property \Cake\I18n\DateTime|null $created
 * @property \Cake\I18n\DateTime|null $modified
 *
 * @property \App\Model\Entity\Marca $marca
 */
class Veiculo extends Entity
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
        'nome_veiculo' => true,
        'ano' => true,
        'combustivel' => true,
        'marca_id' => true,
        'created' => true,
        'modified' => true,
        'marca' => true,
    ];
}
