<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query\SelectQuery;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @method \App\Model\Entity\Student newEmptyEntity()
 * @method \App\Model\Entity\Student newEntity(array $data, array $options = [])
 * @method array<\App\Model\Entity\Student> newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student get(mixed $primaryKey, array|string $finder = 'all', \Psr\SimpleCache\CacheInterface|string|null $cache = null, \Closure|string|null $cacheKey = null, mixed ...$args)
 * @method \App\Model\Entity\Student findOrCreate($search, ?callable $callback = null, array $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method array<\App\Model\Entity\Student> patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student|false save(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method \App\Model\Entity\Student saveOrFail(\Cake\Datasource\EntityInterface $entity, array $options = [])
 * @method iterable<\App\Model\Entity\Student>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Student>|false saveMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Student>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Student> saveManyOrFail(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Student>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Student>|false deleteMany(iterable $entities, array $options = [])
 * @method iterable<\App\Model\Entity\Student>|\Cake\Datasource\ResultSetInterface<\App\Model\Entity\Student> deleteManyOrFail(iterable $entities, array $options = [])
 */
class StudentsTable extends Table
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

        $this->setTable('students');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('term1', [
            'foreignKey' => 'student_id',
        ]);
        $this->hasMany('term2', [
            'foreignKey' => 'student_id',
        ]);
        $this->hasMany('finalresults', [
            'foreignKey' => 'student_id',
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
            ->integer('rollno')
            ->requirePresence('rollno', 'create')
            ->notEmptyString('rollno')
            ->add('rollno', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('MothersName')
            ->maxLength('MothersName', 255)
            ->requirePresence('MothersName', 'create')
            ->notEmptyString('MothersName');

        $validator
            ->scalar('class')
            ->maxLength('class', 5)
            ->requirePresence('class', 'create')
            ->notEmptyString('class');

        $validator
            ->scalar('year')
            ->maxLength('year', 10)
            ->notEmptyString('year');

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
        $rules->add($rules->isUnique(['rollno']), ['errorField' => 'rollno']);

        return $rules;
    }
}
