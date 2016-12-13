<?php
App::uses('Tribe', 'Model');

/**
 * Tribe Test Case
 */
class TribeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tribe',
		'app.user',
		'app.role',
		'app.badge',
		'app.club',
		'app.device',
		'app.friend',
		'app.match_history',
		'app.player'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tribe = ClassRegistry::init('Tribe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tribe);

		parent::tearDown();
	}

}
