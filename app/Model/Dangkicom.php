<?php
App::uses('AppModel', 'Model');
/**
 * Team Model
 *
 * 
 */
class Dangkicom extends AppModel {
	var $name = "Dangkicom";
	

	function dsngaydk($now,$nhanvien_id){
		$dsdk = $this->find('all',array('conditions' => 
			array(
				'Ngay >=' => $now,
				'nhanvien_id ' => $nhanvien_id)
				)
			);
		foreach ($dsdk as $key => $value) {
			$dsdk[$key]['soluong'] = $this->find('count',array('conditions'=>array('ngay'=>$value['Dangkicom']['ngay'])));
		}
		return $dsdk;
	}

}