<?php
App::uses('Device', 'Model');

/**
 * Device Test Case
 */
class DeviceTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.device',
		'app.user',
		'app.role',
		'app.badge',
		'app.club',
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
		$this->Device = ClassRegistry::init('Device');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Device);

		parent::tearDown();
	}

}
