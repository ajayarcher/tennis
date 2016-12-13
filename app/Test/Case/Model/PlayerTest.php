<?php
App::uses('Player', 'Model');

/**
 * Player Test Case
 */
class PlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.player',
		'app.user',
		'app.role',
		'app.badge',
		'app.club',
		'app.device',
		'app.friend',
		'app.match_history',
		'app.tribe',
		'app.preferred_coach',
		'app.preferred_venue',
		'app.preferred_court_surface'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Player = ClassRegistry::init('Player');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Player);

		parent::tearDown();
	}

}
