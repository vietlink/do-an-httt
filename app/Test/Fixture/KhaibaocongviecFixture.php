<?php
/**
 * KhaibaocongviecFixture
 *
 */
class KhaibaocongviecFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id_nhanvien' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'id_duan' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'ngay' => array('type' => 'datetime', 'null' => false, 'default' => null, 'key' => 'primary'),
		'congviecs' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'mota' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'cham_id' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('id_nhanvien', 'id_duan', 'ngay'), 'unique' => 1),
			'fk_khaibaocongviecs_duans1_idx' => array('column' => 'id_duan', 'unique' => 0)
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
			'id_nhanvien' => 1,
			'id_duan' => 1,
			'ngay' => '2013-11-29 14:40:59',
			'congviecs' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'mota' => 'Lorem ipsum dolor sit amet',
			'cham_id' => 1
		),
	);

}
