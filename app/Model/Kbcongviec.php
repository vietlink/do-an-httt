<?php
App::uses('AppModel', 'Model');
/**
 * Khaibaocongviec Model
 *
 * @property Cham $Cham
 */
class Kbcongviec extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	//public $primaryKey = 'n';

/**
 * Display field
 *
 * @var string
 */
	//public $displayField = 'ngay';
	/*
	public $belongsTo = array(
		'Nhanvien' => array(
			'className' => 'Nhanvien',
			'foreignKey' => 'id_nhanvien',
			'conditions' => '',
			'fields' => '',
			'order' => array(
                'Khaibaocongviec.ngay' => 'asc'
            )
		),
	);*/
	
	function listcv($id){
		return $this->find('all', array(
                    'conditions' => array(
                        'id_duan =' => $id),
                    'order' => 'ngay DESC'
                        )
                );
	}

	function xemcv($i,$id){
		return $this->Kbcongviec->find('first', array(
                    'conditions' => array(
                        'id_nhanvien' => $i,
                        'id_duan' => $id,
                        'cham' => null
                    )
                        )
                );
	}

}
