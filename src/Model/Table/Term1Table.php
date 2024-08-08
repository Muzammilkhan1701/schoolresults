<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Term1 Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Term1 newEmptyEntity()
 * @method \App\Model\Entity\Term1 newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Term1> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Term1 get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Term1 findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Term1 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Term1> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Term1|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Term1 saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Term1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term1>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term1> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term1>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term1>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term1> deleteManyOrFail(iterable $entities, array $options = [])
 */
class Term1Table extends Table
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

        $this->setTable('term1');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Students', [
            'foreignKey' => 'Student_id',
            'joinType' => 'INNER',
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
            ->integer('Student_id')
            ->notEmptyString('Student_id');

        $validator
            ->integer('English')
            ->requirePresence('English', 'create')
            ->notEmptyString('English');

        $validator
            ->integer('Hindi')
            ->requirePresence('Hindi', 'create')
            ->notEmptyString('Hindi');

        $validator
            ->integer('Marathi')
            ->requirePresence('Marathi', 'create')
            ->notEmptyString('Marathi');

        $validator
            ->integer('Maths')
            ->requirePresence('Maths', 'create')
            ->notEmptyString('Maths');

        $validator
            ->integer('EVS')
            ->requirePresence('EVS', 'create')
            ->notEmptyString('EVS');

        $validator
            ->integer('total')
            ->requirePresence('total', 'create')
            ->notEmptyString('total');

        $validator
            ->decimal('percentage')
            ->requirePresence('percentage', 'create')
            ->notEmptyString('percentage');

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
        $rules->add($rules->existsIn(['Student_id'], 'Students'), ['errorField' => 'Student_id']);

        return $rules;
    }
}
