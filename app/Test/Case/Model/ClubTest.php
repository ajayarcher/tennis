<?php
App::uses('Club', 'Model');

/**
 * Club Test Case
 */
class ClubTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.club',
		'app.user',
		'app.role',
		'app.badge',
		'app.device',
		'app.friend',
		'app.match_history',
		'app.player',
		'app.preferred_coach',
		'app.preferred_venue',
		'app.preferred_court_surface',
		'app.tribe',
		'app.club_operating_hour',
		'app.coach'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Club = ClassRegistry::init('Club');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Club);

		parent::tearDown();
	}

}
