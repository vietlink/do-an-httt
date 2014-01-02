<?php
App::uses('AppModel', 'Model');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Duan
 *
 * @author linh
 */
class Duan extends AppModel{
    //put your code here
    var $name="Duan";
    
    var $validate = array(
            'tenDuAn' => array(
                'kiem tra tinh duy nhat' => array(
                    'rule' => 'isUnique',
                    'required' => true,
                    'message'=> 'Tên bị trùng'
                ),
            ), 
        'moTa' => array(
                'rule' => 'notEmpty',
                'required' => true
                )
        );
    var $hasAndBelongsToMany = array(
        'Nhanvien' =>array(
            'className' => 'Nhanvien',
            'joinTable' => 'duans_nhanviens',
            'foreignKey' => 'duan_id',
            'associationForeignKey' => 'nhanvien_id',
            'unique' => true,
            'conditions' => '',
            'fields' => array('id','tenNhanVien'),
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        ),
    );
    
    public function isOwnedBy($post, $user) {
        return $this->field('id', array('id' => $post, 'id_subLeader' => $user)) === $post;
    }


    function dsduan(){
        return $this->find('all');
    }

    function xemduan($id){
        return $this->findById($id);
    }
    function nvdachon($id){
        return $this->findById($id, array('fields' => 'id'))['Nhanvien'];
    }
    function listduanchamcong($id){
        return $this->find('all', array(
                    'conditions' => array(
                        'id_subLeader =' => $id
                    ),
                    'order' => 'dkngayKetThuc DESC')
                );
    }

    function listduan(){
        return $this->find('list', array('conditions' => array('ngayKetThuc =' => null), 'fields' => array('id', 'tenDuAn')));
    }

    function ghepmang($a,$b){
        $j=0;
        $soa=count($a);
        for($i=$soa;$i<($soa+count($b));$i++){
            $a[$i]=$b[$i-$soa];
        }
        return $a;
    }

    
}

?>
