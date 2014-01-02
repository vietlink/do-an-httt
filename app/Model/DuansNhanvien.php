<?php
App::uses('AppModel', 'Model');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Nhanvienduan
 *
 * @author linh
 */
class DuansNhanvien extends AppModel {
    var $name= "DuansNhanvien";
    //put your code here


    function duannv($duanid,$nhanvienid){
    	return $this->find('first',array(
    		'conditions'=>array(
    			'duan_id'=>$duanid,
    			'nhanvien_id'=>$nhanvienid
    			)
    		)
    	);
    }
    function checknv($supleader,$id){
        return $this->find('first',array(
            'conditions'=>array(
                'duan_id'=>$id,
                'nhanvien_id'=>$supleader
                )
            )
        );
    }
}

?>
