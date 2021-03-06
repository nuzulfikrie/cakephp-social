<?php
namespace Qobo\Social\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AccountsFixture
 *
 */
class AccountsFixture extends TestFixture
{
    /**
     * {@inheritDoc}
     */
    public $table = 'qobo_social_accounts';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'network_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'handle' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'is_ours' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'credentials' => ['type' => 'text', 'length' => 4294967295, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null],
        'trashed' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'lookup_network_id' => ['type' => 'index', 'columns' => ['network_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'id' => '00000000-0000-0000-0000-000000000001',
                'network_id' => '00000000-0000-0000-0000-000000000001',
                'handle' => 'Lorem ipsum dolor sit amet',
                'active' => 1,
                'is_ours' => 1,
                'credentials' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'trashed' => null,
                'created' => '2019-01-17 12:39:13',
                'modified' => '2019-01-17 12:39:13',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000002',
                'network_id' => '00000000-0000-0000-0000-000000000001',
                'handle' => 'Not ours',
                'active' => 1,
                'is_ours' => 0,
                'credentials' => '',
                'trashed' => null,
                'created' => '2019-01-17 12:39:13',
                'modified' => '2019-01-17 12:39:13',
            ],
            [
                'id' => '00000000-0000-0000-0000-000000000003',
                'network_id' => '99990000-0000-0000-0000-000000000001',
                'handle' => 'Account with bad network',
                'active' => 1,
                'is_ours' => 1,
                'credentials' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'trashed' => null,
                'created' => '2019-01-17 12:39:13',
                'modified' => '2019-01-17 12:39:13',
            ],
        ];
        parent::init();
    }
}
