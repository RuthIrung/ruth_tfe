<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routeparametrerehabilitations Model
 *
 * @property \App\Model\Table\RoutesTable&\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\ParametrerehabilitationsTable&\Cake\ORM\Association\BelongsTo $Parametrerehabilitations
 *
 * @method \App\Model\Entity\Routeparametrerehabilitation get($primaryKey, $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Routeparametrerehabilitation findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class RouteparametrerehabilitationsTable extends Table
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

        $this->setTable('routeparametrerehabilitations');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Parametrerehabilitations', [
            'foreignKey' => 'parametrerehabilitation_id',
            'joinType' => 'INNER',
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
            ->integer('Valeur')
            ->allowEmptyString('Valeur');

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
        $rules->add($rules->existsIn(['route_id'], 'Routes'));
        $rules->add($rules->existsIn(['parametrerehabilitation_id'], 'Parametrerehabilitations'));

        return $rules;
    }
}
