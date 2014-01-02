<?php
App::uses('Khaibaocongviec', 'Model');

/**
 * Khaibaocongviec Test Case
 *
 */
class KhaibaocongviecTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.khaibaocongviec',
		'app.cham'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Khaibaocongviec = ClassRegistry::init('Khaibaocongviec');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Khaibaocongviec);

		parent::tearDown();
	}

}
