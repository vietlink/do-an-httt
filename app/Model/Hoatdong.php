<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of hoatdong
 *
 * @author linh
 */
class Hoatdong extends AppModel{
    //put your code here
    //var $name = 'Hoatdong';
    public $validate = array(
        'tenHoatDong' => array('rule'=>'notEmpty'), 'noiDung' => array('rule' => 'notEmpty')
    );


    var $hasAndBelongsToMany = array(
    'Comment' =>array(
        'className' => 'Comment',
        'joinTable' => 'hoatdongs_comments',
        'foreignKey' => 'hoatdong_id',
        'associationForeignKey' => 'comment_id',
        'unique' => true,
        'conditions' => '',
        'fields' => '',
        'order' => 'comment.created DESC',
        'limit' => '',
        'offset' => '',
        'finderQuery' => '',
        'deleteQuery' => '',
        'insertQuery' => ''
        ));

    function shownews(){
    	return $this->find('all',array(
    		'order'=>array('modified DESC')
    		)
    	);
    }

    function xemhoatdong($id){
    	return $this->findById($id);
    }
    
}

?>
