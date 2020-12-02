<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Travauxs Model
 *
 * @property \App\Model\Table\RoutesTable&\Cake\ORM\Association\BelongsTo $Routes
 * @property \App\Model\Table\TypetravauxsTable&\Cake\ORM\Association\BelongsTo $Typetravauxs
 *
 * @method \App\Model\Entity\Travaux get($primaryKey, $options = [])
 * @method \App\Model\Entity\Travaux newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Travaux[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Travaux|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Travaux saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Travaux patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Travaux[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Travaux findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class TravauxsTable extends Table
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

        $this->setTable('travauxs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Routes', [
            'foreignKey' => 'route_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Typetravauxs', [
            'foreignKey' => 'typetravaux_id',
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
            ->date('DateDebut')
            ->allowEmptyDate('DateDebut');

        $validator
            ->date('DureeTravaux')
            ->allowEmptyDate('DureeTravaux');

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
        $rules->add($rules->existsIn(['typetravaux_id'], 'Typetravauxs'));

        return $rules;
    }
}
