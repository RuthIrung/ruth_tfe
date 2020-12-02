<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TravauxsFixture
 */
class TravauxsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'route_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'typetravaux_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DateDebut' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'DureeTravaux' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_travauxs_typetravauxs1_idx' => ['type' => 'index', 'columns' => ['typetravaux_id'], 'length' => []],
            'fk_travauxs_routes1_idx' => ['type' => 'index', 'columns' => ['route_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'idTravaux_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_travauxs_routes1' => ['type' => 'foreign', 'columns' => ['route_id'], 'references' => ['routes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_travauxs_typetravauxs1' => ['type' => 'foreign', 'columns' => ['typetravaux_id'], 'references' => ['typetravauxs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'route_id' => 1,
                'typetravaux_id' => 1,
                'DateDebut' => '2020-10-24',
                'DureeTravaux' => '2020-10-24',
                'created' => '2020-10-24 18:23:16',
                'modified' => '2020-10-24 18:23:16',
            ],
        ];
        parent::init();
    }
}
