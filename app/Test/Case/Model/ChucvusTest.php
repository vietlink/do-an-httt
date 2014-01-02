<?php
App::uses('Chucvus', 'Model');

/**
 * Chucvus Test Case
 *
 */
class ChucvusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.chucvus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Chucvus = ClassRegistry::init('Chucvus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Chucvus);

		parent::tearDown();
	}

}
