<?php
App::uses('AppModel', 'Model');
/**
 * Nhanvien Model
 *
 * @property ChucVu $ChucVu
 * @property Taikhoan $Taikhoan
 */
class Nhanvien extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'tenNhanVien' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'ngayVao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			)
		),
		'namSinh' => array(
				'Trong khoang cho phep' => array(
               'rule' => array('between', 4, 4),
               'required' => false,
               //'allowEmpty' => false,
               'message' => 'Điền đủ 4 số',
               'on' => 'create', // Limit validation to 'create' or 'update' operations
           ),
			 
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed





/**
 * belongsTo associations
 *
 * @var array
 */

	public $belongsTo = array(
		'Chucvu' => array(
			'className' => 'Chucvu',
			'foreignKey' => 'chucvu_id',
			'conditions' => '',
			'fields' => '',
			'order' => array(
                'Nhanvien.tenNhanVien' => 'asc'
            )
		),
	);

/**
 * HasOne associations
 *
 * @var array
 */

	public $hasOne = array(
        'Taikhoan' => array(
	        'className' => 'Taikhoan',
	        'conditions' => '',
	        'dependent' => true
        )
    ); 


    var $hasAndBelongsToMany = array(
    'duan' =>array(
        'className' => 'duan',
        'joinTable' => 'duans_nhanviens',
        'foreignKey' => 'nhanvien_id',
        'associationForeignKey' => 'duan_id',
        'unique' => true,
        'conditions' => '',
        'fields' => '',
        'order' => '',
        'limit' => '',
        'offset' => '',
        'finderQuery' => '',
        'deleteQuery' => '',
        'insertQuery' => ''
        ),
    );
/*
public $findMethods = array('nv' => true);
 function _findNv($id){
	//return $this->data->findByid($id);
	$query['conditons']['Nhanvien.id'] = $id;
	return $query; 
}
*/

    
	public function danhsachnv(){
		return $this->find('all');
	}

	public function xemnv($id){
		$options = array('conditions' => array('Nhanvien.' . $this->primaryKey => $id));
		return $this->find('first', $options);
		//return $this->find('first', array('conditions'=>array('id'=>$id)));
	}

	function dstaikhoan(){
		return $this->Taikhoan->find('list',
				array(
				'fields' => array(
					'id',
					'username'	
					),
				'conditions' => array('nhanvien_id' => 0)
				)
			);
	}

	function dstaikhoanedit(){
		return $this->Taikhoan->find('list',
				array(
				'fields' => array(
					'id',
					'username'	
					)
				)
			);
	}

	function dschucvu(){
		return $this->Chucvu->find('list',array(
				'fields' => array(
					'id',
					'tenChucVu'	
					)));
	}

	function listleader(){
		$ds = $this->find('all', array('conditions'=>array('group_id'=>3),'fields' => array('Nhanvien.id', 'Nhanvien.tenNhanvien')));
		$listL=array();
		foreach($ds as $list){
			$listL[$list['Nhanvien']['id']]=$list['Nhanvien']['tenNhanvien'];
		}
		return $listL;
		//return $this->find('all');
	}
	function listnv(){
		return $this->find('list', array('fields' => array('id', 'tenNhanVien')));
	}
        
        
	
}

