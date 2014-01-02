<?php
App::uses('Nhanvien', 'Model');

/**
 * Nhanvien Test Case
 *
 */
class NhanvienTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.nhanvien',
		'app.chuc_vu',
		'app.taikhoan'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Nhanvien = ClassRegistry::init('Nhanvien');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Nhanvien);

		parent::tearDown();
	}

}
