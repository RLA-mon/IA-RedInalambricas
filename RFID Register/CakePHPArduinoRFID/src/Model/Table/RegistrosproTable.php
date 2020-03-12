<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Registrospro Model
 *
 * @method \App\Model\Entity\Registrospro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Registrospro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Registrospro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Registrospro|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registrospro saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Registrospro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Registrospro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Registrospro findOrCreate($search, callable $callback = null, $options = [])
 */
class RegistrosproTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('registrospro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('numeroid')
            ->maxLength('numeroid', 50)
            ->requirePresence('numeroid', 'create')
            ->notEmptyString('numeroid');

        $validator
            ->scalar('ertenece')
            ->maxLength('ertenece', 50)
            ->requirePresence('ertenece', 'create')
            ->notEmptyString('ertenece');

        $validator
            ->dateTime('date')
            ->notEmptyDateTime('date');

        return $validator;
    }
}
