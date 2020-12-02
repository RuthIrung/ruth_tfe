<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Routeparametrerehabilitation Entity
 *
 * @property int $id
 * @property int $route_id
 * @property int $parametrerehabilitation_id
 * @property int|null $Valeur
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Parametrerehabilitation $parametrerehabilitation
 */
class Routeparametrerehabilitation extends Entity
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
        'route_id' => true,
        'parametrerehabilitation_id' => true,
        'Valeur' => true,
        'created' => true,
        'modified' => true,
        'route' => true,
        'parametrerehabilitation' => true,
    ];
}
