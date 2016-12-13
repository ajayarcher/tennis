<?php
/**
 * ClubOperatingHour Fixture
 */
class ClubOperatingHourFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'club_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'start_day' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'end_day' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start_time' => array('type' => 'time', 'null' => false, 'default' => null),
		'end_time' => array('type' => 'time', 'null' => false, 'default' => null),
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
			'club_id' => 1,
			'start_day' => 'Lorem ip',
			'end_day' => 'Lorem ip',
			'start_time' => '11:10:45',
			'end_time' => '11:10:45',
			'created' => '2016-12-13 11:10:45',
			'modified' => '2016-12-13 11:10:45'
		),
	);

}
