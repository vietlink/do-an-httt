<?php
/**
 * TaikhoanFixture
 *
 */
class TaikhoanFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'key' => 'unique', 'collate' => 'latin1_bin', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'id_nhanvien' => array('type' => 'integer', 'null' => false, 'default' => null),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'username_2' => array('column' => 'username', 'unique' => 1),
			'group_id' => array('column' => 'group_id', 'unique' => 0),
			'username' => array('column' => 'username', 'unique' => 0),
			'group_id_2' => array('column' => 'group_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'id_nhanvien' => 1,
			'group_id' => 1,
			'id' => 1
		),
	);

}
