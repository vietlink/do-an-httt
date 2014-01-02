<?php
App::uses('AppModel', 'Model');
/**
 * Team Model
 *
 * 
 */
class Xinnghi extends AppModel {
	var $name = "Xinnghi";
	

    var $validate = array(
            'lydo' => array(
                    'rule' => 'notempty',
                    'required' => false,
                
            ),
            'batdau' => array(
            'date' => array(
                'rule' => array('datetime'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
            'ketthuc' => array(
            'date' => array(
                'rule' => array('datetime'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            )
        ),
        );



    function thongtinnghi($now,$id){
        return $this->find('first',array('conditions'=>array('batdau <' => $now, 'ketthuc >' =>$now,'nhanvien_id' => $id)));
    }    
}