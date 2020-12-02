<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ComptesFixture
 */
class ComptesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'utilisateur_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'typedecompte_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'login' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 8, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_comptes_typedecomptes_idx' => ['type' => 'index', 'columns' => ['typedecompte_id'], 'length' => []],
            'fk_comptes_utilisateurs1_idx' => ['type' => 'index', 'columns' => ['utilisateur_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'idCompte_UNIQUE' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'login_UNIQUE' => ['type' => 'unique', 'columns' => ['login'], 'length' => []],
            'pwd_UNIQUE' => ['type' => 'unique', 'columns' => ['password'], 'length' => []],
            'fk_comptes_typedecomptes' => ['type' => 'foreign', 'columns' => ['typedecompte_id'], 'references' => ['typedecomptes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_comptes_utilisateurs1' => ['type' => 'foreign', 'columns' => ['utilisateur_id'], 'references' => ['utilisateurs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'utilisateur_id' => 1,
                'typedecompte_id' => 1,
                'login' => 'Lorem ip',
                'password' => 'Lorem ',
                'email' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-10-24 18:23:13',
                'modified' => '2020-10-24 18:23:13',
            ],
        ];
        parent::init();
    }
}
