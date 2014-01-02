<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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

App::uses('Controller', 'Controller');
App::uses('AppModel', 'AppModel');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $components = array(
        'Session',
        'Auth'=>array(
            'loginAction'=>array('controller'=>'Taikhoans', 'action'=>'login'),
            'loginRedirect'=>array('controller'=>'Taikhoans', 'action'=>'index'),
            'logoutRedirect'=>array('controller'=>'Taikhoans', 'action'=>'login'),
            'authError'=>"You can't access that page",
            'authorize'=>array('Controller')
        )
    );
    public $helpers = array('Html', 'Form', 'Session');

    function _flash($message,$type='message') {
        $messages = (array)$this->Session->read('Message.multiFlash');
        $messages[] = array(
            'message'=>$message,
            'layout'=>'default',
            'element'=>'default',
            'params'=>array('class'=>$type),
        );
        $this->Session->write('Message.multiFlash', $messages);
    }

    public function beforeFilter() {
        $this->layout = 'doan';
    	Security::setHash("md5");
		//$this->AppModel->useDbConfig='admin';
		$this->Auth->authenticate = array(
		    'Basic' => array('userModel' => 'Taikhoan'),
		    'Form' => array('userModel' => 'Taikhoan')
		);
		$this->set('user_id',$this->_usersId());
        $this->set('user_inf',$this->_usersIf());
        $this->set('userlevel',$this->_userlevel());
        //echo $this->_userlevel();
                //$this->Model->phanquyen($this->_phanquyen());
        //Configure AuthComponent
         $this->Auth->allow('login');
        $this->Auth->loginAction = array('controller' => 'Taikhoans', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'Taikhoans', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'Nhanviens', 'action' => 'index');
        
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
    /**
    * Lay nhanvien_id
    * 
    * return int
*/  
    function _usersId(){
        $admin = false;
        if($this->Auth->user())
            return $this->Auth->user('nhanvien_id');
    }

    function _userlevel(){
        if($this->Auth->user()){
            return $this->Auth->user('group_id');
        }
    }
        /**
    
    * Lay nhanvien_id
    * 
    * return int
    */  
    function _usersIf(){
        $admin = false;
        if($this->Auth->user()){
            $id = $this->Auth->user('nhanvien_id');
            $this->loadModel('Nhanvien');
            $data=$this->Nhanvien->findById($id);
            if($data!=null){
                return $data['Nhanvien'];
            }else{
                return null;
            }
        }
        return null;
    }
    public function _phanquyen(){
        if($this->Auth->user()){
            return $this->Auth->user('group_id');
        }
    }
    public function isAuthorized($user) {
        return true;
    }
}