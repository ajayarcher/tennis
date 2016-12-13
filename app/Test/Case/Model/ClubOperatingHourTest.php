<?php
App::uses('ClubOperatingHour', 'Model');

/**
 * ClubOperatingHour Test Case
 */
class ClubOperatingHourTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.club_operating_hour',
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
		'app.coach'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ClubOperatingHour = ClassRegistry::init('ClubOperatingHour');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ClubOperatingHour);

		parent::tearDown();
	}

}
