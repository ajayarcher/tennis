<?php
App::uses('MatchHistory', 'Model');

/**
 * MatchHistory Test Case
 */
class MatchHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.match_history',
		'app.user',
		'app.role',
		'app.badge',
		'app.club',
		'app.device',
		'app.friend',
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
		$this->MatchHistory = ClassRegistry::init('MatchHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MatchHistory);

		parent::tearDown();
	}

}
