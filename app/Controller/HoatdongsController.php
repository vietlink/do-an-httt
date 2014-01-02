<?php
App::uses('AppController', 'Controller');
/**
 * Hoatdongs Controller
 *
 * @property Hoatdong $Hoatdong
 */
class HoatdongsController extends AppController {

/**
 * index method
 *
 * @return void
 */
    public function isAuthorized($user) {
	    if ($user['group_id'] == '1') {
	        return true;
	    }
	    if (in_array($this->action, array('index', 'view'))) {
	        if ($user['group_id'] == '1' ||$user['group_id'] == '2' || $user['group_id'] == '3' || $user['group_id'] == '4' || $user['group_id'] == '5' ) {
	            return true;
	        }
            }
	    	$this->_flash(__('Bạn không có quyền truy cập trang này.', true),'warning');
                return FALSe;
           
	}
        
	public function index() {
		$this->set('title_for_layout', 'Hoạt động của công ty');
		$data=$this->Hoatdong->shownews();
foreach ($data as $key => $value) {
	$s=0;
	foreach($value['Comment'] as $l){$s++;}
	$data[$key]['Hoatdong']['Comment']=$s;
}
		
		//pr($data);die();
		$this->set('hoatdongs', $data);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->loadModel('Nhanvien');
		if (!$this->Hoatdong->exists($id)) {
			throw new NotFoundException(__('Invalid hoatdong'));
		}
		//$options = array('conditions' => array('Hoatdong.' . $this->Hoatdong->primaryKey => $id));
		//pr($this->Hoatdong->xemhoatdong($id));die();
		$data=$this->Hoatdong->xemhoatdong($id);
		foreach($data['Comment'] as $key=>$value){
			$data['Comment'][$key]['nhanvien'] = $this->Nhanvien->findById($value['nhanvien_id'])['Nhanvien'];
		}
		//pr($data);die();
		//$data=$this->Hoatdong->xemhoatdong($id);
		$this->set('hoatdong', $data);
		$this->set('title_for_layout', $data['Hoatdong']['tenHoatDong']);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Thêm hoạt động mới');
		if ($this->request->is('post')) {
			$this->Hoatdong->create();
			$now = date('Y').'-'.date('m').'-'.date('d').' '.(date('H')+6).':'.date('i').':'.date('s');
			$this->request->data['Hoatdong']['created']=$now;
			$this->request->data['Hoatdong']['modified']=$now;
			if ($this->Hoatdong->save($this->request->data)) {
				$this->_flash(__('Lưu '.$this->request->data['Hoatdong']['tenHoatDong'].' thành công', true),'success');
				//$this->Session->setFlash(__('The hoatdong has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Không lưu được! Hãy thử lại.', true),'error');
				//$this->Session->setFlash(__('The hoatdong could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Hoatdong->exists($id)) {
			throw new NotFoundException(__('Invalid hoatdong'));
		}
		$now = date('Y').'-'.date('m').'-'.date('d').' '.(date('H')+6).':'.date('i').':'.date('s');
			$this->request->data['Hoatdong']['modified']=$now;
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Hoatdong->save($this->request->data)) {
				$this->_flash(__('Lưu '.$this->request->data['Hoatdong']['tenHoatDong'].' thành công', true),'success');
				//$this->Session->setFlash(__('The hoatdong has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Không lưu được! Hãy thử lại.', true),'error');
			}
		} else {
			//$options = array('conditions' => array('Hoatdong.' . $this->Hoatdong->primaryKey => $id));
			$this->data = $this->Hoatdong->xemhoatdong($id);
			$this->set('title_for_layout', $this->request->data['Hoatdong']['tenHoatDong']);
			//pr($this->request->data);die();
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Hoatdong->id = $id;
		if (!$this->Hoatdong->exists()) {
			throw new NotFoundException(__('Invalid hoatdong'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Hoatdong->delete()) {
			$this->_flash(__('Xóa thành công', true),'success');
			$this->Session->setFlash(__('Hoatdong deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->_flash(__('Không xóa được! Hãy thử lại.', true),'error');
		$this->redirect(array('action' => 'index'));
	}




	public function addcomment($noidung=null,$idbv=null){
		$this->loadModel('Comment');
		$this->loadModel('HoatdongsComment');
		if ($noidung==null) {
			echo json_encode(2);die();
		}else{
			$luu = array('Comment'=>array(
				'nhanvien_id'=>$this->Auth->user('nhanvien_id'),
				'noidung'=>$noidung
				)
			);
			
			if($this->Comment->save($luu) ){
				//echo $this->Comment->id; die();
				$luu2 = array('HoatdongsComment'=>array(
					'hoatdong_id'=>$idbv,
					'comment_id'=>$this->Comment->id
					)
				);
				if($this->HoatdongsComment->save($luu2)){
					//echo json_encode(1);die();
					$id = $this->Auth->user('nhanvien_id');
		            $this->loadModel('Nhanvien');
		            $data=$this->Nhanvien->findById($id);
		            //pr($data);die();
		            echo json_encode($data['Nhanvien']);die();
				}else{
					echo json_encode(0);die();
				}
				
			}else{
				
			}
		}
	}

/*
	function showcomment($baiviet_id=null){
		$this->loadModel('Comment');
		if ($baiviet_id==null) {
			echo json_encode(2);die();
		}else{
			echo json_encode($this->Comment->findBy)
		}
	}
*/

	public function home(){
	
}
}


