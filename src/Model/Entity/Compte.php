<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Compte Entity
 *
 * @property int $id
 * @property int $utilisateur_id
 * @property int $typedecompte_id
 * @property string|null $login
 * @property string|null $password
 * @property string|null $email
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Utilisateur $utilisateur
 * @property \App\Model\Entity\Typedecompte $typedecompte
 */
class Compte extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'utilisateur_id' => true,
        'typedecompte_id' => true,
        'login' => true,
        'password' => true,
        'email' => true,
        'created' => true,
        'modified' => true,
        'utilisateur' => true,
        'typedecompte' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];
}
