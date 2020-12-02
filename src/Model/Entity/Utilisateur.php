<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;

use Cake\ORM\Entity;

/**
 * Utilisateur Entity
 *
 * @property int $id
 * @property string|null $nomsUtilisateur
 * @property string|null $email
 * @property string|null $genre
 * @property string|null $TypeUtilisateur
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Compte[] $comptes
 */
class Utilisateur extends Entity
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
        'nomsUtilisateur' => true,
        'email' => true,
        'genre' => true,
        'TypeUtilisateur' => true,
        'created' => true,
        'modified' => true,
        'comptes' => true,
    ];
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
