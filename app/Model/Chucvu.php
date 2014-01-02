<?php
App::uses('AppModel', 'Model');
/**
 * Chucvus Model
 *
 */
class Chucvu extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'chucvu';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tenChucvu' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	function dschucvu(){
		return $this->find('all');
	}

	function xemchucvu($id){
		$options = array('conditions' => array('Chucvu.' . $this->primaryKey => $id));
		return $this->find('first', $options);
	}
}
