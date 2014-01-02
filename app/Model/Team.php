<?php
App::uses('AppModel', 'Model');
/**
 * Team Model
 *
 * 
 */
class Team extends AppModel {
	var $name = "Team";
	

    var $validate = array(
            'name' => array(
                'kiem tra tinh duy nhat' => array(
                    'rule' => 'isUnique',
                    'required' => true,
                    'message'=> 'Tên bị trùng'
                )
            ),
            'quanly_id' => array(
                'rule' => 'alphaNumeric',
                'required' => true
                )
        );

    public $actsAs =array(
        'tree'
   );


    




    var $hasAndBelongsToMany = array(
    'Nhanvien' =>array(
        'className' => 'Nhanvien',
        'joinTable' => 'teams_nhanviens',
        'foreignKey' => 'team_id',
        'associationForeignKey' => 'nhanvien_id',
        'unique' => true,
        'conditions' => '',
        'fields' => array('id','tenNhanVien','chuyenNganh','namSinh'),
        'order' => 'tenNhanVien asc',
        'limit' => '',
        'offset' => '',
        'finderQuery' => '',
        'deleteQuery' => '',
        'insertQuery' => ''
        ));
	/*
var $hasOne = array(
        'TeamsNhanviens' => array(
        'className' => 'TeamsNhanviens',
        'conditions' => '',
        'dependent' => true
        )); 

	var $hasMany = array(
        'TeamsNhanviens' => array(
        'className' => 'TeamsNhanviens',
        'foreignKey' => 'team_id',
        'conditions' => '',
        'order' => '',
        'limit' => '',
        'dependent'=> true
        )); 
*/
}
/*
public function phantrang($id,$page){
	$trang = $page*1;
	$this->data->select('*');
	$this->data->from('Team');
	$
}*/