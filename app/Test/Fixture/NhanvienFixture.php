<?php
/**
 * NhanvienFixture
 *
 */
class NhanvienFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'key' => 'primary'),
		'tenNhanVien' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'ngayVao' => array('type' => 'date', 'null' => false, 'default' => null),
		'ngayRa' => array('type' => 'date', 'null' => true, 'default' => null),
		'namSinh' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 4),
		'diaChi' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'soDT' => array('type' => 'integer', 'null' => true, 'default' => null),
		'chuyenNganh' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'chucVu_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 3, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'id' => array('column' => 'id', 'unique' => 0),
			'id_2' => array('column' => 'id', 'unique' => 0),
			'id_3' => array('column' => 'id', 'unique' => 0),
			'id_4' => array('column' => 'id', 'unique' => 0),
			'id_5' => array('column' => 'id', 'unique' => 0),
			'fk_chucvu' => array('column' => 'chucVu_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'tenNhanVien' => 'Lorem ipsum dolor sit amet',
			'ngayVao' => '2013-11-12',
			'ngayRa' => '2013-11-12',
			'namSinh' => 1,
			'diaChi' => 'Lorem ipsum dolor sit amet',
			'soDT' => 1,
			'chuyenNganh' => 'Lorem ipsum d',
			'chucVu_id' => 1
		),
	);

}
