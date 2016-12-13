<?php
App::uses('Coach', 'Model');

/**
 * Coach Test Case
 */
class CoachTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.coach',
		'app.club'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Coach = ClassRegistry::init('Coach');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Coach);

		parent::tearDown();
	}

}
