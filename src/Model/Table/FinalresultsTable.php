<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Finalresults Model
 *
 * @property \App\Model\Table\StudentsTable&\Cake\ORM\Association\BelongsTo $Students
 *
 * @method \App\Model\Entity\Finalresult newEmptyEntity()
 * @method \App\Model\Entity\Finalresult newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Finalresult> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Finalresult get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Finalresult findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Finalresult patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Finalresult> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Finalresult|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Finalresult saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Finalresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Finalresult>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Finalresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Finalresult> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Finalresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Finalresult>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Finalresult>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Finalresult> deleteManyOrFail(iterable $entities, array $options = [])
 */
class FinalresultsTable extends Table
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

        $this->setTable('finalresults');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Students', [
            'foreignKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Term1', [
            'foreignKey' => 'student_id',
            'bindingKey' => 'student_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Term2', [
            'foreignKey' => 'student_id',
            'bindingKey' => 'student_id',
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
            ->integer('term1_total')
            ->requirePresence('term1_total', 'create')
            ->notEmptyString('term1_total');

        $validator
            ->integer('term2_total')
            ->requirePresence('term2_total', 'create')
            ->notEmptyString('term2_total');

        $validator
            ->integer('final_total')
            ->requirePresence('final_total', 'create')
            ->notEmptyString('final_total');

        $validator
            ->decimal('final_percentage')
            ->requirePresence('final_percentage', 'create')
            ->notEmptyString('final_percentage');

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
