<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Utilisateurs Model
 *
 * @property \App\Model\Table\ComptesTable&\Cake\ORM\Association\HasMany $Comptes
 *
 * @method \App\Model\Entity\Utilisateur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Utilisateur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Utilisateur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utilisateur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Utilisateur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Utilisateur findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UtilisateursTable extends Table
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

        $this->setTable('utilisateurs');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Comptes', [
            'foreignKey' => 'utilisateur_id',
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
            ->scalar('nomsUtilisateur')
            ->maxLength('nomsUtilisateur', 45)
            ->allowEmptyString('nomsUtilisateur');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->scalar('genre')
            ->maxLength('genre', 10)
            ->allowEmptyString('genre');

        $validator
            ->scalar('TypeUtilisateur')
            ->maxLength('TypeUtilisateur', 20)
            ->allowEmptyString('TypeUtilisateur');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->isUnique(['id']));

        return $rules;
    }
}
