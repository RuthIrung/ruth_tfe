<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Travaux Entity
 *
 * @property int $id
 * @property int $route_id
 * @property int $typetravaux_id
 * @property \Cake\I18n\FrozenDate|null $DateDebut
 * @property \Cake\I18n\FrozenDate|null $DureeTravaux
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Route $route
 * @property \App\Model\Entity\Typetravaux $typetravaux
 */
class Travaux extends Entity
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
        'typetravaux_id' => true,
        'DateDebut' => true,
        'DureeTravaux' => true,
        'created' => true,
        'modified' => true,
        'route' => true,
        'typetravaux' => true,
    ];
}
