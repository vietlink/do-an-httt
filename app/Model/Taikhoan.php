<?php
App::uses('AppModel', 'Model');
/**
 * Taikhoan Model
 *
 * @property Nhanvien $Nhanvien
 * @property Group $Group
 */
class Taikhoan extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'group_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
/*
public function __construct() {
        //parent::__construct($useDbConfig);
       $this->useDbConfig = 'admin';
	//if($this->Auth->user()){
	/*
			switch ($this->userlevel){
					case 1:	$this->useDbConfig = 'admin'; break;
					case 2: $this->useDbConfig = 'supleader'; break;
					case 3: $this->useDbConfig = 'nhanvien'; break;
				}
		//}
    }*/
    /*
public function beforeSave($options = array()) {
        $this->data['Taikhoan']['password'] = AuthComponent::password($this->data['Taikhoan']['password']);
        return true;
    }*/
    function chuyenpass($pass){
    	return AuthComponent::password($pass);
    } 
    function setlevel($level){
    	//parent::id=2;
    	if($level===1){
    		parent::setlevelok('admin');	
    	}elseif($level===2){
    		parent::setlevelok('subleader');
    	}else{
    		parent::setlevelok('nhanvien');
    	}
    	return 0;
    }
   function getquyen(){
   		return $this->useDbConfig;
   } 
/*
var $hasOne = array(
        'Nhanvien' => array(
        'className' => 'Nhanvien',
        'conditions' => '',
        'dependent' => true
        )); 
*/
/**
 * belongsTo associations
 *
 * @var array
 */



	function trataikhoan($id){
		return $this->findById($id);
	}
	
	function dstaikhoan(){
		return $this->find('all');
	}
}
