<?php
App::uses('AppController', 'Controller');
/**
 * Taikhoans Controller
 *
 * @property Taikhoan $Taikhoan
 */
class TaikhoansController extends AppController {


	/**
	 * beforeFilter method
	 *
	 * @return void
	 */
	public function beforeFilter() {
	     parent::beforeFilter();
             $this->Auth->allow('logout');
	}

        
        
        public function isAuthorized($user) {
	    if ($user['group_id'] == '1') {
	        return true;
	    }
//	    if (in_array($this->action, array('edit', 'delete'))) {
//	        if ($user['id'] != $this->request->params['pass'][0]) {
//	            return false;
//	        }
//	    }
            $this->_flash(__('Bạn không có quyền truy cập trang này.', true),'warning');
	    return false;
	}
	/**
	 * login method
	 *
	 * @return void
	 */
	public function login() {
		 
		$this->layout = 'login';
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            if ($this->Session->read('Auth.User')) {
                        
	            	//$this->Taikhoan->getDatasource()->disconnect();
	            	//$this->Taikhoan->setlevel($this->Auth->user('group_id'));
	            	/*
	            	$db = ConnectionManager::getDataSource('default');
	            	$db->close();
	            	$db1 = ConnectionManager::getDataSource('admin');
	            	$isconnected = $db1->isConnected();
	            	*/
					//pr($this->Taikhoan->getquyen());die();
	                $this->_flash(__('Xin chào '.$this->_usersIf()['tenNhanVien'].'!', true),'success');
                        
	                return $this->redirect(array('controller' => 'Hoatdongs', 'action' => 'index'));
	            }
	        }else {
	        		$this->_flash(__('Tài khoản hoặc mật khẩu của bạn sai!', true),'error');
                    //$this->_flash(__('Your username or password was incorrect.', true),'warning');
                }
	        
	    }
	}


	/**
	 * logout method
	 *
	 * @return void
	 */
	public function logout(){
		//$this->Auth->logout();
            $this->Session->destroy();
                $this->redirect($this->Auth->logout());
		$this->redirect(array('controller' => 'Taikhoans', 'action' => 'login'));
            //$this->redirect($this->Auth->logout());
	}

/*

	public function initDB() {
	    $group =& $this->Taikhoan->Group;
	    //Allow admins to everything
	    $group->id = 1;
	    $this->Acl->allow($group, 'controllers');
	    //$this->Acl->allow(array('model' => 'Group', 'foreign_key' => 1), 'controllers');

	    //allow Subleader to posts and widgets
	    //$group->id = 2;
	    $this->Acl->deny(array( 'model' => 'Group', 'foreign_key' => 2), 'controllers');
	    $this->Acl->allow(array( 'model' => 'Group', 'foreign_key' => 2), 'controllers/Groups');
	    $this->Acl->allow(array( 'model' => 'Group', 'foreign_key' => 2), 'controllers/Taikhoans');
	    //$this->Acl->allow($group, 'controllers/Widgets');

	    //allow users to only add and edit on posts and widgets
	    //$group->id = 3;
	    $this->Acl->deny(array( 'model' => 'Group', 'foreign_key' => 3), 'controllers');
	    $this->Acl->allow(array( 'model' => 'Group', 'foreign_key' => 3), 'controllers/Groups/index');
	    $this->Acl->allow(array( 'model' => 'Group', 'foreign_key' => 3), 'controllers/Taikhoans/index');
	    //$this->Acl->allow($group, 'controllers/Taikhoans/index');
	    //$this->Acl->allow($group, 'controllers/Groups/index');
	    //$this->Acl->allow($group, 'controllers/Taikhoans/view');
	    //$this->Acl->allow($group, 'controllers/Groups/view');
	    //we add an exit to avoid an ugly "missing views" error message
	    echo "all done";
	    exit;
	}
*/


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$title = 'Tài khoản';
		$this->set('title_for_layout',$title);
		$this->set('taikhoans', $this->Taikhoan->dstaikhoan());
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
		if (!$this->Taikhoan->exists($id)) {
			throw new NotFoundException(__('Invalid taikhoan'));
		}
		$this->set('taikhoan',$this->Taikhoan->trataikhoan($id));
	}
*/
/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//$this->Taikhoan->create();
			$this->request->data['Taikhoan']['password']=$this->Taikhoan->chuyenpass($this->request->data['Taikhoan']['password']);
			if ($this->Taikhoan->save($this->request->data)) {
				$this->_flash(__('Lưu thành công!', true),'success');
				//$this->Session->setFlash(__('The taikhoan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Không lưu được. Hãy thử lại', true),'error');
				//$this->Session->setFlash(__('The taikhoan could not be saved. Please, try again.'));
			}
		}
		$level=array('0'=>'','1'=>'Admin','2'=>'Leader','3'=>'Subleader','4'=>'News','5'=>'user');
		$this->set('level',$level);
		/*
		$nhanviens = $this->Taikhoan->Nhanvien->find('list',array(
			'fields' => array(
				'id',
				'tenNhanVien'	
				)
			));
			*/
		//$groups = $this->Taikhoan->Group->find('list');
		//$this->set(compact( 'groups'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Taikhoan->exists($id)) {
			throw new NotFoundException(__('Invalid taikhoan'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$luu = $this->request->data;
			if($luu['Taikhoan']['password']!=$luu['Taikhoan']['passwordcu']){
				
				$luu['Taikhoan']['password']=$this->Taikhoan->chuyenpass($luu['Taikhoan']['password']);
			}
			//pr($luu);die();
			if ($this->Taikhoan->save($luu)) {
				$this->_flash(__('Lưu thành công!', true),'success');
				//$this->Session->setFlash(__('The taikhoan has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Không lưu được. Hãy thử lại', true),'error');
				//$this->Session->setFlash(__('The taikhoan could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Taikhoan->trataikhoan($id);
			$this->set('passcu',$this->request->data['Taikhoan']['password']);
		}
		$level=array('0'=>'','1'=>'Admin','2'=>'Leader','3'=>'Subleader','4'=>'News','5'=>'user');
		$this->set('level',$level);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Taikhoan->id = $id;
		if (!$this->Taikhoan->exists()) {
			throw new NotFoundException(__('Invalid taikhoan'));
		}
		if ($this->Taikhoan->delete()) {
			$this->_flash(__('Xóa thành công!', true),'success');
			$this->redirect(array('action' => 'index'));
		}
		$this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
		$this->redirect(array('action' => 'index'));
	}
}
