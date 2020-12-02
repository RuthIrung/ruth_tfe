<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Parametrerehabilitations Model
 *
 * @property \App\Model\Table\RouteparametrerehabilitationsTable&\Cake\ORM\Association\HasMany $Routeparametrerehabilitations
 *
 * @method \App\Model\Entity\Parametrerehabilitation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Parametrerehabilitation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParametrerehabilitationsTable extends Table
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

        $this->setTable('parametrerehabilitations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Routeparametrerehabilitations', [
            'foreignKey' => 'parametrerehabilitation_id',
        ]);
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
            ->allowEmptyString('id', null, 'create')
            ->add('id', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('designation')
            ->maxLength('designation', 25)
            ->allowEmptyString('designation');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
