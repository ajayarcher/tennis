<?php
App::uses('Venue', 'Model');

/**
 * Venue Test Case
 */
class VenueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.venue'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Venue = ClassRegistry::init('Venue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Venue);

		parent::tearDown();
	}

}
