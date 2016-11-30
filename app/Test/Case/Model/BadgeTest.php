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
		'app.user_detail',
		'app.country',
		'app.match'
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
