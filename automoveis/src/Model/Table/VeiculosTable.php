<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Veiculos Model
 *
 * @property \App\Model\Table\MarcasTable&\Cake\ORM\Association\BelongsTo $Marcas
 *
 * @method \App\Model\Entity\Veiculo newEmptyEntity()
 * @method \App\Model\Entity\Veiculo newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Veiculo> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Veiculo findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Veiculo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Veiculo> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Veiculo|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Veiculo saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Veiculo>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Veiculo> deleteManyOrFail(iterable $entities, array $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class VeiculosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array<string, mixed> $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('veiculos');
        $this->setDisplayField('nome_veiculo');
        $this->setPrimaryKey('id_veiculos');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Marcas', [
            'foreignKey' => 'marca_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('nome_veiculo')
            ->maxLength('nome_veiculo', 100)
            ->allowEmptyString('nome_veiculo');

        $validator
            ->date('ano')
            ->allowEmptyDate('ano');

        $validator
            ->scalar('combustivel')
            ->maxLength('combustivel', 50)
            ->allowEmptyString('combustivel');

        $validator
            ->integer('marca_id')
            ->allowEmptyString('marca_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['marca_id'], 'Marcas'), ['errorField' => 'marca_id']);

        return $rules;
    }
}
