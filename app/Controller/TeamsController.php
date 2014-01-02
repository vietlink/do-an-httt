<?php

/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class TeamsController extends AppController {
    //public $helpers = array('Html','Form','Paginator');
    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'Teams';
    /**
         * beforeFilter method
         *
         * @return void
         */
/*        public function beforeFilter() {
             parent::beforeFilter();
            $this->Auth->allow();
        }*/
    /**
     * This controller does not use a model
     *
     * @var array
     */
    public function isAuthorized($user) {
	    if ($user['group_id'] == '1') {
	        return true;
	    }
	    if (in_array($this->action, array('index', 'view'))) {
	        if ($user['group_id'] == '1' ||$user['group_id'] == '2' || $user['group_id'] == '3'|| $user['group_id'] == '5') {
	            return true;
	        }
	    }
                $this->_flash(__('Bạn không có quyền truy cập trang này.', true),'warning');
                
                return FALSe;  
	}
    

    public function index() {
        
        //debug($this->Team->find('all'));
        $data = $this->Team->generateTreeList(null,null,null,'----');
        $this->set('data',$data);
    }
    



    public function add(){
        $this->loadModel('Nhanvien');
            $this->loadModel('TeamsNhanVien');
        if ($this->request->is('post')){
            //$this->Team->create();
            //if($this->Team->validates()){
            //$this->Team->validates() 
            //pr($this->request->data); die();
            if($this->Team->save($this->request->data)){
                $id = $this->Team->id;
            //pr($id);
                //echo $this->Team->id;
            //die();
            foreach ($this->request->data['kq'] as $key => $value) {
                if($value==1){
                   $lunhanvien = array(
                    'TeamsNhanVien'=> array(
                        'team_id' => $id,
                        'nhanvien_id' => $key
                        )
                    );
                    $this->TeamsNhanVien->save($lunhanvien);
                    $this->TeamsNhanVien->create(); 
                }
            }
            $this->_flash(__('Lưu thành công!', true),'success');
            //$this->Session->setFlash(__('Tạo thành công'));
            $this->redirect(array('action'=>'index'));
        }
        $this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
        //$this->Session->setFlash(__('Lỗi mạng hoặc do trùng tên. Hãy thử lần nữa'));
        $this->redirect(array('action'=>'add'));   
            /*
        }else{
            $this->loadModel('Nhanvien');
            $this->loadModel('TeamsNhanVien');
            $this->set('listnhanviens',$this->Nhanvien->find('list', 
            array(
                'fields'=> array(
                    'id',
                    'tenNhanVien'
                    )
                )
            ));
            $data = array('Parent')+$this->Team->generateTreeList(null,null,null,'--');
            $this->set('data',$data);
        }*/
        }else{
            
            $this->set('listnhanviens',$this->Nhanvien->find('list', 
            array(
                'fields'=> array(
                    'id',
                    'tenNhanVien'
                    )
                )
            ));
            $data = array('Parent')+$this->Team->generateTreeList(null,null,null,'--');
            $this->set('data',$data);
        }
    }


    //public $selects = array();
    public function edit($id=null){
        /*
$a= array('1'=>2);
$b= array('1'=>3,'2'=>1);
//pr($b not $a);
var_dump(isset($b[2]));
die();*/

        $selects = array();
        if (!$this->Team->exists($id)) {
            //throw new NotFoundException(__('Invalid taikhoan'));
            $this->Session->setFlash(__('Địa chỉ truy cập sai'));
            $this->redirect(array('action'=>'index'));
        }
        //pr($this->data);
        $this->loadModel('Nhanvien');
        $this->loadModel('TeamsNhanVien');
        if ($this->request->is('post')){
            //pr($this->request->data); die();
            
            $daselects = $this->Team->findById($id,array('fields'=>'id'))['Nhanvien'];
            $update = array();
            
            foreach ($daselects as $key => $value) {
                $selects[$value['id']] = 1;
            }
            //pr($selects); pr($this->request->data['kq']);
            foreach ($this->request->data['kq'] as $key => $value) {
                if($value==1 && !isset($selects[$key])){
                    //echo $key.' '.$value; die();
                   $lunhanvien = array(
                    'TeamsNhanVien'=> array(
                        'team_id' => $id,
                        'nhanvien_id' => $key
                        )
                    );
                $this->TeamsNhanVien->save($lunhanvien);
                $this->TeamsNhanVien->create(); 
            }elseif($value==0 && isset($selects[$key])){
                //echo $key.' '.$value; die();
                    $this->TeamsNhanVien->deleteAll(array('nhanvien_id'=>$key,'team_id'=>$id),false);    
                
            }
            }

            $this->Team->save($this->request->data);
            $this->_flash(__('Sửa thành công!', true),'success');
            $this->redirect(array('action'=>'view',$id));
        }else{
            $this->set('listnhanviens',$this->Nhanvien->find('list', 
            array(
                'fields'=> array(
                    'id',
                    'tenNhanVien'
                    )
                )
            ));

            if ($id !=null){
            $data = array('Parent')+$this->Team->generateTreeList(null,null,null,'--');
            //debug($this->Team->findById($id));
            $daselects = $this->Team->findById($id,array('fields'=>'id'))['Nhanvien'];
            
            foreach ($daselects as $key => $value) {
                $selects['kq'][$value['id']] = 1;
            }
            
            //$this->loadModel('TeamsNhanVien');
            //debug($this->TeamsNhanVien->find('all',array('conditions' => array('team_id'=> $id ),'fields'=>'nhanvien_id')));
            $this->set('select',$selects);
            $this->set('data',$data);

            $this->Team->id = $id; 
            $this->data = $this->Team->read();
            $this->data += $selects;
            //debug($this->data);
        }
        }
        
        
        
        
    }
    


    public function view($id=null){
        $this->loadModel('Nhanvien');
        if (!$this->Team->exists($id)) {
            //throw new NotFoundException(__('Invalid Team'));
            $this->Session->setFlash(__('Địa chỉ truy cập sai'));
            $this->redirect(array('action'=>'index'));
            
        }
        //debug($this->Team->findById($id));
        $data=$this->Team->findById($id);
        //debug($data);
        //$this->loadModel('TeamsNhanVien');
        //debug($this->TeamsNhanVien->find('all'),array('conditions'=>array('team_id' => $id)));
        $this->set('team',$data['Team']);
        $this->set('nhanvien',$data['Nhanvien']);
        //debug($this->Nhanvien->findById($data['Team']['quanly_id'])['Nhanvien']);
        $this->set('quanly',$this->Nhanvien->findById($data['Team']['quanly_id'])['Nhanvien']);
    }

    public function deleteuser($idnv=null,$idt=null){
        $this->loadModel('TeamsNhanVien');
        //$this->TeamsNhanVien->nhanvien_id = $idnv;
        //debug($this->TeamsNhanVien);
        if ($this->TeamsNhanVien->deleteAll(array('nhanvien_id'=>$idnv),false)) {
            $this->_flash(__('Xóa thành công!', true),'success');
            $this->redirect(array('action' => 'view',$idt));
        }
        $this->_flash(__('Lỗi. Bạn hãy thử lại!', true),'error');
        //$this->redirect(array('action' => 'view',$idt));
    }

    public function delete($id){
        $this->Team->removeFromTree($id,true);
        $this->_flash(__('Xóa thành công!', true),'success');
        $this->redirect(array('action'=>'view'));
    }


    

}
