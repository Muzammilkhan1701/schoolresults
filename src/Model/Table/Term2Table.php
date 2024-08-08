<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Term2 Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Term2 newEmptyEntity()
 * @method \App\Model\Entity\Term2 newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Term2> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Term2 get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Term2 findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Term2 patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Term2> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Term2|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Term2 saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Term2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term2>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term2> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term2>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Term2>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Term2> deleteManyOrFail(iterable $entities, array $options = [])
 */
class Term2Table extends Table
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

        $this->setTable('term2');
        $this->setDisplayField('English');
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
            ->scalar('English')
            ->maxLength('English', 255)
            ->requirePresence('English', 'create')
            ->notEmptyString('English');

        $validator
            ->scalar('Hindi')
            ->maxLength('Hindi', 255)
            ->requirePresence('Hindi', 'create')
            ->notEmptyString('Hindi');

        $validator
            ->scalar('Marathi')
            ->maxLength('Marathi', 225)
            ->requirePresence('Marathi', 'create')
            ->notEmptyString('Marathi');

        $validator
            ->scalar('Maths')
            ->maxLength('Maths', 255)
            ->requirePresence('Maths', 'create')
            ->notEmptyString('Maths');

        $validator
            ->scalar('EVS')
            ->maxLength('EVS', 255)
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
