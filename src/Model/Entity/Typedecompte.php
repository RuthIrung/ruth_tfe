<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Typedecompte Entity
 *
 * @property int $id
 * @property string|null $designation
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Compte[] $comptes
 */
class Typedecompte extends Entity
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
        'designation' => true,
        'created' => true,
        'modified' => true,
        'comptes' => true,
    ];
}
