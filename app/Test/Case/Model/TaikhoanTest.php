<?php
App::uses('Taikhoan', 'Model');

/**
 * Taikhoan Test Case
 *
 */
class TaikhoanTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.taikhoan',
		'app.group'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Taikhoan = ClassRegistry::init('Taikhoan');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Taikhoan);

		parent::tearDown();
	}

}
