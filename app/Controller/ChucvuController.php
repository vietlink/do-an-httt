<?php
App::uses('AppController', 'Controller');
/**
 * Chucvuses Controller
 *
 * @property Chucvus $Chucvus
 */
class ChucvuController extends AppController {
	/*
public function beforeFilter() {
     parent::beforeFilter();
    $this->Auth->allow();
}*/
/**
 * index method
 *
 * @return void
 */
    
    
    public function isAuthorized($user) {
        //only admin can access
	    if ($user['group_id'] == '1') {
	        return true;
	    }
                $this->_flash(__('Bạn không có quyền truy cập trang này.', true),'warning');
                return false;
	}
        
        
	public function index() {
		$this->set('title_for_layout', 'Chức vụ');
		//$this->Chucvu->recursive = 0;
		//$this->set('chucvuses', $this->paginate());
		$this->set('chucvuses',$this->Chucvu->dschucvu());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
/*
	public function view($id = null) {
		if (!$this->Chucvu->exists($id)) {
			throw new NotFoundException(__('Invalid chucvus'));
		}
		$this->set('chucvus',$this->Chucvu->xemchucvu($id));
	}
*/
/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Thêm chức vụ mới');
		if ($this->request->is('post')) {
			$this->Chucvu->create();
			if ($this->Chucvu->save($this->request->data)) {
				$this->_flash(__('Lưu thành công!', true),'success');
				//$this->Session->setFlash(__('The chucvu has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
				//$this->Session->setFlash(__('The chucvu could not be saved. Please, try again.'));
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
		if (!$this->Chucvu->exists($id)) {
			throw new NotFoundException(__('Invalid chucvus'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			//pr($this->request->data);die();
			if ($this->Chucvu->save($this->request->data)) {
				$this->_flash(__('Lưu thành công!', true),'success');
				//$this->Session->setFlash(__('The chucvus has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
				//$this->Session->setFlash(__('The chucvus could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Chucvu->xemchucvu($id);
			$this->set('title_for_layout', 'Sửa '.$this->request->data['Chucvu']['tenChucVu']);
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
		$this->Chucvu->id = $id;
		if (!$this->Chucvu->exists()) {
			throw new NotFoundException(__('Invalid chucvus'));
		}
		if ($this->Chucvu->delete()) {
			$this->_flash(__('Xóa thành công!', true),'success');
			//$this->Session->setFlash(__('Chucvu deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
		//$this->Session->setFlash(__('Chucvu was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
