<?php
/**
 * Player Fixture
 */
class PlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'profile_picture' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'current_points' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'reliability' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'is_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'mode' => array('type' => 'boolean', 'null' => false, 'default' => null, 'comment' => '0=social, 1=competitive'),
		'coach_rating' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'ntrp' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'utr' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'itn' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_rating_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'global_ranking' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'band_ranking' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tribe1_ranking' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tribe2_ranking' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_ranking_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'forehand_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'backhand_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'slice_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'netgame_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'serve_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'pointplay_trait' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_trait_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'is_badge_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'is_friend_public' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'preferred_coach_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'preferred_venue_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'preferred_court_surface_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'doubles_partner' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'is_open_beaconplay' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'is_open_challangeplay' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'self_rating' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'self_rating_description' => array('type' => 'text', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'profile_picture' => 'Lorem ipsum dolor sit amet',
			'current_points' => 1,
			'reliability' => 1,
			'is_public' => 1,
			'mode' => 1,
			'coach_rating' => 'Lorem ipsum dolor sit amet',
			'ntrp' => 'Lorem ipsum dolor sit amet',
			'utr' => 'Lorem ipsum dolor sit amet',
			'itn' => 'Lorem ipsum dolor sit amet',
			'is_rating_public' => 1,
			'global_ranking' => 'Lorem ipsum dolor sit amet',
			'band_ranking' => 'Lorem ipsum dolor sit amet',
			'tribe1_ranking' => 'Lorem ipsum dolor sit amet',
			'tribe2_ranking' => 'Lorem ipsum dolor sit amet',
			'is_ranking_public' => 1,
			'forehand_trait' => 'Lorem ipsum dolor sit amet',
			'backhand_trait' => 'Lorem ipsum dolor sit amet',
			'slice_trait' => 'Lorem ipsum dolor sit amet',
			'netgame_trait' => 'Lorem ipsum dolor sit amet',
			'serve_trait' => 'Lorem ipsum dolor sit amet',
			'pointplay_trait' => 'Lorem ipsum dolor sit amet',
			'is_trait_public' => 1,
			'is_badge_public' => 1,
			'is_friend_public' => 1,
			'preferred_coach_id' => 1,
			'preferred_venue_id' => 1,
			'preferred_court_surface_id' => 1,
			'doubles_partner' => 'Lorem ipsum dolor sit amet',
			'is_open_beaconplay' => 1,
			'is_open_challangeplay' => 1,
			'self_rating' => 1,
			'self_rating_description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2016-12-13 11:09:14',
			'modified' => '2016-12-13 11:09:14'
		),
	);

}
