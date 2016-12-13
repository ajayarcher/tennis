<?php
App::uses('Friend', 'Model');

/**
 * Friend Test Case
 */
class FriendTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.friend',
		'app.user',
		'app.role',
		'app.badge',
		'app.club',
		'app.device',
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
		$this->Friend = ClassRegistry::init('Friend');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Friend);

		parent::tearDown();
	}

}
