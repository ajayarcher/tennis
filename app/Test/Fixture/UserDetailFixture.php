<?php
/**
 * UserDetail Fixture
 */
class UserDetailFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user_detail';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'surname' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'suffix' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 5, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'dob' => array('type' => 'date', 'null' => false, 'default' => null),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'postal_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_public' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0=no, 1=yes'),
		'is_rating' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0=no, 1=yes'),
		'ntrpid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'itnid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'utrid' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ntrp_level' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'itn_level' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'utr_level' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'self_rating' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_beaconplay' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0=no, 1=yes'),
		'is_challangeplay' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0=no, 1=yes'),
		'is_newsletter' => array('type' => 'boolean', 'null' => false, 'default' => '0', 'comment' => '0=no, 1=yes'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'user_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'surname' => 'Lorem ipsum dolor sit amet',
			'suffix' => 'Lor',
			'dob' => '2016-11-29',
			'email' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'postal_code' => 'Lorem ipsum d',
			'is_public' => 1,
			'is_rating' => 1,
			'ntrpid' => 'Lorem ip',
			'itnid' => 'Lorem ip',
			'utrid' => 'Lorem ip',
			'ntrp_level' => 1,
			'itn_level' => 1,
			'utr_level' => 1,
			'self_rating' => 1,
			'is_beaconplay' => 1,
			'is_challangeplay' => 1,
			'is_newsletter' => 1,
			'created' => '2016-11-29 07:43:57',
			'modified' => '2016-11-29 07:43:57'
		),
	);

}
