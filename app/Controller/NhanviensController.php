<?php
App::uses('AppController', 'Controller');
/**
 * Nhanviens Controller
 *
 * @property Nhanvien $Nhanvien
 */
class NhanviensController extends AppController {
	
//var $paginate = array();
    

    /**
 * index method
 *
 * @return void
 */
    
    public function isAuthorized($user) { 
	    if (in_array($this->action, array('index', 'add', 'view', 'edit', 'delete' ,'xinnghi'))) {
	        if ($user['group_id'] == '1') {
	            return true;
	        }
	    }
            
            
            if (in_array($this->action, array('index', 'view', 'xinnghi', 'dangkicom'))) {
	        if ($user['group_id'] == '2' || $user['group_id'] == '3' || $user['group_id'] == '5') {
	            return true;
	        }
	    }
            
            if (in_array($this->action, array('edit', 'huycom'))) {
                $postId = $this->request->params['pass'][0];
                if ($user['nhanvien_id']==$postId){
                    return true;
                }
	    }
               	$this->_flash(__('Bạn không có quyền truy cập trang này.', true),'warning');
                return FALSe;
            
            
	}
	public function index() {
		//$this->loadModel('Taikhoan');
		//echo $this->Taikhoan->getquyen();
		$this->set('title_for_layout', 'Danh sách nhân viên');
		$this->Nhanvien->recursive = 0;
		//$this->set('nhanviens', $this->paginate('Nhanvien'));
		$this->set('nhanviens',$this->Nhanvien->danhsachnv());
		//$nhanvien = $this->paginate();
		//$this->set('nhanviens',$nhanvien);
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		
		if (!$this->Nhanvien->exists($id)) {
			throw new NotFoundException(__('Invalid nhanvien'));
		}
		$this->loadModel('Xinnghi');
		
		$nhanviens=$this->Nhanvien->xemnv($id);
		$this->set('nhanvien', $nhanviens);
		$this->set('title_for_layout', 'Profile '.$nhanviens['Nhanvien']['tenNhanVien']);
		$time = $this->Xinnghi->thongtinnghi($now,$id); 
		if(($time!=null)){
		if(strtotime($time['Xinnghi']['ketthuc'])-strtotime($now) > 0){
			$this->set('nghi',$time);
		}
	}
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->set('title_for_layout', 'Thêm nhân viên mới');
		if ($this->request->is('post')) {
			//pr($this->request->data);die();
			//$TARGET_PATH="\images\'";
			//move_uploaded_file($this->request->data['Nhanvien']['anh'], $TARGET_PATH);
			$tmp = date("Ymdhis").rand(1,10);
			//echo $this->request->data['Nhanvien']['anh']['name']; die();
			if (is_uploaded_file($this->request->data['Nhanvien']['anh']['tmp_name']))
			{
				//$now = date('Y').date('m').(date('d')).;
			    move_uploaded_file(
			        $this->request->data['Nhanvien']['anh']['tmp_name'],
			        'E:\xampp\htdocs\da\webroot\img\ava\ ' . $tmp.$this->request->data['Nhanvien']['anh']['name']
			    );
			    //$url='\da\webroot\img\ava\ ' . $this->request->data['Nhanvien']['anh']['name'];
			    // store the filename in the array to be saved to the db
			    $this->request->data['Nhanvien']['anh'] = $this->request->data['Nhanvien']['anh']['name'];
			}
			//pr($this->request->data);die();
			$this->loadModel('Taikhoan');
			$this->Nhanvien->create();
			$this->request->data['Nhanvien']['anh']=$tmp.$this->request->data['Nhanvien']['anh']['name'];
			//debug($this->request->data);die();
			if ($this->Nhanvien->save($this->request->data)) {
				//$this->Taikhoan->save()
				//debug($this->request->data);die();
				$this->_flash(__('Lưu thành công!', true),'success');
				//$this->Session->setFlash(__('The nhanvien has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->_flash(__('Không lưu được. Hãy thử lại', true),'error');
				//$this->Session->setFlash(__('The nhanvien could not be saved. Please, try again.'));
			}
		}else{
			$taikhoan = $this->Nhanvien->dstaikhoan();
			if($taikhoan==null){
				$this->_flash(__('Không lưu được. Hãy thử lại', true),'warning');
				$this->redirect(array('controller' => 'Taikhoans','action' => 'add'));
			}else{
				$this->set('taikhoans', $taikhoan);//Hien thi nhung tai khoan chua co record nhanvien ket noi
				$this->set('option',$this->Nhanvien->dschucvu());
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

		if (!$this->Nhanvien->exists($id)) {
			throw new NotFoundException(__('Invalid nhanvien'));
		}
		$this->set('option',$this->Nhanvien->dschucvu());
		$this->set('taikhoans',$taikhoan = $this->Nhanvien->dstaikhoanedit());
			
		if ($this->request->is('post') || $this->request->is('put')) {//pr($this->request->data);die();
			if($this->request->data['Nhanvien']['anhcu']!=''){
				if($this->request->data['Nhanvien']['anh']['error']!=4){
					$tmp = date("Ymdhis").rand(1,10);
					//pr($this->request->data);die();
					if (is_uploaded_file($this->request->data['Nhanvien']['anh']['tmp_name']))
					{
					    move_uploaded_file(
					        $this->request->data['Nhanvien']['anh']['tmp_name'],
					        'img/ava/ ' . $tmp.$this->request->data['Nhanvien']['anh']['name']
					    );
					    unlink('img/ava/ '.$this->request->data['Nhanvien']['anhcu']);
					}
					$this->request->data['Nhanvien']['anh']=$tmp.$this->request->data['Nhanvien']['anh']['name'];
				}else{
					$this->request->data['Nhanvien']['anh']=$this->request->data['Nhanvien']['anhcu'];
				}
			}else{
				if($this->request->data['Nhanvien']['anh']['error']!=4){
					$tmp = date("Ymdhis").rand(1,10);
					//pr($this->request->data);die();
					if (is_uploaded_file($this->request->data['Nhanvien']['anh']['tmp_name']))
					{
					    move_uploaded_file(
					        $this->request->data['Nhanvien']['anh']['tmp_name'],
					        'img/ava/ ' . $tmp.$this->request->data['Nhanvien']['anh']['name']
					    );
					}
					$this->request->data['Nhanvien']['anh']=$tmp.$this->request->data['Nhanvien']['anh']['name'];
				}else{
					$this->request->data['Nhanvien']['anh']='membell.png';
				}
			}
			$this->loadModel('Taikhoan');
			$taikhoan = $this->Taikhoan->trataikhoan($this->request->data['Nhanvien']['taikhoan_id']);
			$b['Taikhoan'] = $taikhoan['Taikhoan'];
			$b['Taikhoan']['nhanvien_id'] = $this->request->data['Nhanvien']['id'];    //Luu nhanvien_id tai bang taikhoan
			if ($this->Nhanvien->save($this->request->data) && $this->Taikhoan->save($b)) {
				if($this->request->data['cu']!=$this->request->data['Nhanvien']['taikhoan_id'] && $this->request->data['cu']!=null){
					$cu=$this->Taikhoan->trataikhoan($this->request->data['cu']);
					$cu['Taikhoan']['nhanvien_id']=0;
					$this->Taikhoan->save($cu);
				}
				$this->_flash(__('Lưu thành công!', true),'success');
				$this->redirect(array('action' => 'view',$id));
			} else {
				$this->_flash(__('Không lưu được. Hãy thử lại', true),'error');
			}
		} else {
			$options = array('conditions' => array('Nhanvien.' . $this->Nhanvien->primaryKey => $id));
			$this->data = $this->Nhanvien->xemnv($id);
			$this->set('title_for_layout', 'Sửa thông tin cá nhân '.$this->data['Nhanvien']['tenNhanVien']);
			$image=$this->data['Nhanvien']['anh'];
			$this->set('image',$image);
			$this->set('select',$this->data['Taikhoan']['id']);
			
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
		$this->Nhanvien->id = $id;
		if (!$this->Nhanvien->exists()) {
			throw new NotFoundException(__('Invalid nhanvien'));
		}
		if ($this->Nhanvien->delete()) {
			$this->Session->setFlash(__('Nhanvien deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->_flash(__('Xóa thành công!', true),'success');
		//$this->Session->setFlash(__('Nhanvien was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * xinnghi method
 *
 * @throws NotFoundException
 * 
 * @return void
 */

	public function xinnghi(){
		$this->set('title_for_layout', 'Xin nghỉ');
			$this->set('lamthays',$this->Nhanvien->find('list',array('fields'=>array('id','tenNhanVien'),'order'=>array('tenNhanVien ASC'))));
			if ($this->request->is('post') || $this->request->is('put')) {
				//pr($this->request->data);
				
				$dau=strtotime($this->request->data['Xinnghi']['batdau']);
				$kthuc=strtotime($this->request->data['Xinnghi']['ketthuc']);
				$this->request->data['Xinnghi']['batdau'] = date('Y-m-d H:i:s',$dau);
				$this->request->data['Xinnghi']['ketthuc'] = date('Y-m-d H:i:s',$kthuc);
				//pr($this->request->data);
				//die();
				foreach ($this->request->data as $key => $value) {
					$nhanvien_id = $value['nhanvien_id'];
				}
				if ($nhanvien_id!=0){
					$this->loadModel('Xinnghi');
					//pr($this->request->data);die();
					if($this->Xinnghi->save($this->request->data)){
						$this->_flash(__('Thành công!', true),'success');
						//$this->Session->setFlash(__('Thành công!'));
						$this->redirect(array('action'=>'index'));
                                              
                                             
					}else{
						$this->_flash(__('Lỗi. Hãy thử lại!', true),'error');
						//$this->Session->setFlash(__('Lỗi. Hãy thử lại'));
					}
				}else{
					$this->_flash(__('Tài khoản của bạn chưa được kích hoạt', true),'warning');
					//$this->Session->setFlash(__('Tài khoản của bạn chưa được kích hoạt'));
					$this->redirect(array('action'=>'index'));
				}
			}
			
		}
	/**
 * Dang ky com method
 *
 * @throws NotFoundException
 * 
 * @return void
 */

	public function Dangkicom(){
		$this->set('title_for_layout', 'Báo cơm');
		$this->loadModel('Dangkicom');
		if(date('d')<10){
			$tmp = '0';
		}else{
			$tmp = '';
		}
		if(localtime()[2]+6>=17){            //Neu qua 17h thi khong duoc dk com cua ngay hom do nua,
			$now = date('Y').'-'.date('m').'-'.$tmp.(date('d')+1);
		}else{
			$now = date('Y').'-'.date('m').'-'.$tmp.(date('d'));
		}
		//echo $xoa;
		//pr($this->Dangkicom->find('all',array('conditions'=>array('ngay <' => $xoa))));
		 //die();
		$xoa = date('Y').'-'.date('m').'-'.(date('d')-7);
		$this->Dangkicom->deleteAll(array('Dangkicom.ngay <' => $xoa),false);	 // xoa nhung dang ky com sau 1 tuan.
		$this->set('da',$now);
		$dsdk=$this->Dangkicom->dsngaydk($now,$this->Auth->user('nhanvien_id'));
		//echo $this->Dangkicom->find('count',array('conditions'=>array('ngay'=>)));
		//pr($this->Dangkicom->dsngaydk($now,$this->Auth->user('nhanvien_id')));die();
		$this->set('dangky',$this->Dangkicom->dsngaydk($now,$this->Auth->user('nhanvien_id')));
			if ($this->request->is('post') || $this->request->is('put')) {
				//pr($this->data); //echo $this->request->data['Dangkicom']['denngay'];
				$id = $this->request->data['Dangkicom']['nhanvien_id'];
					$now =  strtotime($this->request->data['Dangkicom']['ngay']);
				    $your_date = strtotime($this->request->data['Dangkicom']['denngay']);
				    $datediff =  $your_date-$now;
				    $songay = floor($datediff/(60*60*24));
				
				//Neu chi dang ky mot ngay
				if($your_date==''){
					if($this->Dangkicom->save($this->request->data)){
						$this->request->data=null;
						$this->_flash(__('Đăng ký thành công!', true),'success');
						//$this->Session->setFlash(__('Đăng ký thành công!'));
						$this->redirect(array('action'=>'Dangkicom'));
					}else{
						$this->_flash(__('Lỗi. Bạn hãy thử lại', true),'error');
						//$this->Session->setFlash(__('Lỗi. Bạn hãy thử lại'));
					}
				}else{
					$luu = array();
					for ($i=0; $i <= $songay; $i++) { 
						$ngay = date("Y-m-d",$now); //echo $ngay;die();
						if($this->Dangkicom->findAllByNgay($ngay)!=null){
							//$this->Session->setFlash(__('Bạn đã đăng ký ngày '.$ngay.' rồi'));
							$this->Dangkicom->create();
							$now = ($now+(60*60*24));
							continue;
						//$this->redirect(array('action'=>'Dangkicom'));
						}
						$luu = array('Dangkicom'=>array('ngay'=>$ngay,'nhanvien_id'=>$id));
						$this->Dangkicom->save($luu);
						$this->Dangkicom->create();
						$now = ($now+(60*60*24));
					}
					$this->request->data=null;
					$this->_flash(__('Đăng ký thành công!', true),'success');
					//$this->Session->setFlash(__('Đăng ký thành công!'));
					$this->redirect(array('action'=>'Dangkicom'));
				}
			}
	}

	/**
 * Huy com method
 *
 * @throws NotFoundException
 * 
 * @return void
 */

	public function huycom($id=null){
		$this->loadModel('Dangkicom');
		$this->Dangkicom->id = $id;
		//$this->Nhanvien->id = $id;
		if($this->Dangkicom->delete()){
			$this->_flash(__('Hủy thành công!', true),'success');
			//$this->Session->setFlash(__('Hủy thành công'));
			$this->redirect(array('action'=>'Dangkicom'));
		}else{
			$this->_flash(__('Lỗi. Bạn hãy thử lại', true),'error');
			//$this->Session->setFlash(__('Lỗi hãy thử lại!'));
		}
	}	
}
