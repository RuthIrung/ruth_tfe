<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RouteparametrerehabilitationsFixture
 */
class RouteparametrerehabilitationsFixture extends TestFixture
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
        'parametrerehabilitation_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Valeur' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_routeparametrerehabilitations_routes1_idx' => ['type' => 'index', 'columns' => ['route_id'], 'length' => []],
            'fk_routeparametrerehabilitations_parametrerehabilitations1_idx' => ['type' => 'index', 'columns' => ['parametrerehabilitation_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'idRouteParametreRehabilitation_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'fk_routeparametrerehabilitations_parametrerehabilitations1' => ['type' => 'foreign', 'columns' => ['parametrerehabilitation_id'], 'references' => ['parametrerehabilitations', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_routeparametrerehabilitations_routes1' => ['type' => 'foreign', 'columns' => ['route_id'], 'references' => ['routes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'parametrerehabilitation_id' => 1,
                'Valeur' => 1,
                'created' => '2020-10-24 18:23:15',
                'modified' => '2020-10-24 18:23:15',
            ],
        ];
        parent::init();
    }
}
