<?php
App::uses('Badge', 'Model');

/**
 * Badge Test Case
 */
class BadgeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.badge',
		'app.user',
		'app.role',
		'app.club',
		'app.club_operating_hour',
		'app.coach',
		'app.device',
		'app.friend',
		'app.match_history',
		'app.player',
		'app.preferred_coach',
		'app.preferred_venue',
		'app.preferred_court_surface',
		'app.tribe'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Badge = ClassRegistry::init('Badge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Badge);

		parent::tearDown();
	}

}
