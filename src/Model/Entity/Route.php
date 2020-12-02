<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Route Entity
 *
 * @property int $id
 * @property string|null $Nom
 * @property string|null $Longueur
 * @property string|null $Coordonnees
 * @property string|null $Etat
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Routeparametrerehabilitation[] $routeparametrerehabilitations
 * @property \App\Model\Entity\Travaux[] $travauxs
 */
class Route extends Entity
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
        'Nom' => true,
        'Longueur' => true,
        'Coordonnees' => true,
        'Etat' => true,
        'created' => true,
        'modified' => true,
        'routeparametrerehabilitations' => true,
        'travauxs' => true,
    ];
}
