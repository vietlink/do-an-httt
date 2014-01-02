<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'Controller');

/**
 * Description of DuansController
 *
 * @author linh
 */
class DuansController extends AppController {

    public function isAuthorized($user) {
        if (in_array($this->action, array('index', 'view'))) {
            if ($user['group_id'] == '1' || $user['group_id'] == '2' || $user['group_id'] == '3' || $user['group_id'] == '5') {
                return true;
            }
        }

        if (in_array($this->action, array('add'))) {
            if ($user['group_id'] == '2') {
                return true;
            }
        }

        if (in_array($this->action, array('edit', 'delete', 'ketthucduan', 'deleteuser',))) {
            if ($user['group_id'] == '2' || $user['group_id'] == '3') {
                return true;
            }
        }
        if (in_array($this->action, array('khaibao'))) {
            if ($user['group_id'] == '5') {
                return true;
            }
        }

        if (in_array($this->action, array('chamcong', 'listchamcong'))) {
            if ($user[group_id] == '3') {
                return true;
            }
        }

        $this->_flash(__('Bạn không có quyền truy cập trang này.', true), 'warning');

        return FALSe;
    }

    public function index() {
        $this->set('title_for_layout', 'Danh sách dự án công ty');
        $this->set('duans', $this->Duan->dsduan());
    }

    public function view($id = NULL) {
        if (!$this->Duan->exists($id)) {
            throw new NotFoundException(__('Invalid chucvus'));
        }
        $data = $this->Duan->xemduan($id);
        $this->set('duan', $data['duan']);
        $this->set('title_for_layout', $data['duan']['tenDuAn']);
        $this->loadModel('Kbcongviec');
        $cv = $this->Kbcongviec->listcv($id);
        //$cv+=$data['Nhanvien'];
        //echo $cv.length;
        $cv = $this->Duan->ghepmang($cv, $data['Nhanvien']);
        //$cv=array_merge($cv,$data['Nhanvien']);
        $this->set('listcv', $cv);
        //pr($cv);
        //pr($data['Nhanvien']);
        //die();
        $this->set('nhanvien', $data['Nhanvien']);
        $this->set('quanly', $this->Nhanvien->xemnv($data['duan']['id_subLeader'])['Nhanvien']);
    }

    public function add() {
        $this->loadModel('Nhanvien');
        $this->loadModel('DuansNhanvien');
        if ($this->request->is('post')) {
            if ($this->Duan->save($this->request->data['Duan'])) {
                if ($this->data['Duan']['ngayBatDau'] > $this->data['Duan']['dkngayKetThuc']) {
                    $this->_flash(__('Ngày kết thúc phải sau ngày bắt đầu!', true), 'warning');
                    $this->redirect(array('action' => 'add'));
                }
                $id = $this->Duan->id;
                $luduan = array(
                    'DuansNhanvien' => array(
                        'duan_id' => $id,
                        'nhanvien_id' => $this->request->data['Duan']['id_subLeader'],
                        'vitri' => 'Leader'
                    )
                );
                //pr($luduan);die();
                $this->DuansNhanvien->save($luduan);
                $this->DuansNhanvien->create();
                foreach ($this->request->data['kq'] as $key => $value) {
                    if ($value == 1) {
                        $luduan = array(
                            'DuansNhanvien' => array(
                                'duan_id' => $id,
                                'nhanvien_id' => $key,
                                'vitri' => 'Developer'
                            )
                        );

                        $this->DuansNhanvien->save($luduan);
                        $this->DuansNhanvien->create();
                    }
                }
                $this->_flash(__('Tạo thành công', true), 'success');
                $this->redirect(array('action' => 'index'));
            }
            $this->_flash(__('Lỗi mạng hoặc do trùng tên. Hãy thử lần nữa'));
            $this->redirect(array('action' => 'add'));
        } else {
            $this->set('listleader', $this->Nhanvien->listleader());
            $this->set('listnhanviens', $this->Nhanvien->listnv());
        }
    }

    public function edit($id = NULL) {
        $selects = array();
        if (!$id) {
            throw new NotFoundException(__('Dự án không tồn tại'));
        }

        $duan = $this->Duan->xemduan($id);
        if (!$duan) {
            throw new NotFoundException(__('Dự án không tồn tại'));
        }
        $this->loadModel('Nhanvien');
        $this->loadModel('DuansNhanvien');


        if ($this->request->is('post')) {
            //pr($this->request->data);die();
            //$this->Duan->id = $id;
            //
            $now = date('Y') . '-' . date('m') . '-' . (date('d'));
            $daselects = $this->Duan->nvdachon($id);    //ds nhan vien da chon
            $update = array();
            foreach ($daselects as $key => $value) {
                if ($value['DuansNhanvien']['public'] == 1) {
                    $selects[$value['id']] = 1;
                }
            }
            //pr($selects);
            //pr($this->request->data['kq']);
            //
            $luduan['duan'] = $this->request->data['Duan'];

            //pr($luduan);die();
            //$check = $this->DuansNhanvien->checknv($luduan['duan']['id_subLeader'],$id);
            $check = $this->DuansNhanvien->find('first', array(
                'conditions' => array(
                    'duan_id' => $id,
                    'nhanvien_id' => $luduan['duan']['id_subLeader']
                )
                    )
            );
            //pr($check);die();
            if ($check == null) {
                $lunhanvien = array('DuansNhanvien' => array(
                        'duan_id' => $id,
                        'nhanvien_id' => $luduan['duan']['id_subLeader'],
                        'vitri' => 'Leader',
                    )
                );
                $this->DuansNhanvien->save($lunhanvien);
                $this->DuansNhanvien->create();
                $check = $this->DuansNhanvien->find('first', array(
                    'conditions' => array(
                        'duan_id' => $id,
                        'nhanvien_id' => $luduan['duan']['subLeadercu']
                    )
                        ));
                $check['DuansNhanvien']['public'] = 0;
                $check['DuansNhanvien']['modified'] = $now;
                $this->DuansNhanvien->save($check);
            } else {
                $check['DuansNhanvien']['public'] = 1;
                $this->DuansNhanvien->save($check);
            }

            foreach ($this->request->data['kq'] as $key => $value) { //sau du lieu bang duans_nhanviens
                if ($value == 1 && !isset($selects[$key])) {  // Them nhan vien moi vao du an
                    /*
                      $lunhanvien = array(
                      'DuansNhanvien' => array(
                      'duan_id' => $id,
                      'nhanvien_id' => $key,
                      'public' => '1'
                      )
                      ); */

                    $lunhanvien = $this->DuansNhanvien->find('first', array(
                        'conditions' => array(
                            'duan_id' => $id,
                            'nhanvien_id' => $key,
                        )
                            )
                    );

                    if ($lunhanvien == null) {
                        $lunhanvien = array(
                            'DuansNhanvien' => array(
                                'duan_id' => $id,
                                'nhanvien_id' => $key,
                                'vitri' => 'Developer'
                            )
                        );
                    } else {
                        $lunhanvien['DuansNhanvien']['public'] = 1;
                        $lunhanvien['DuansNhanvien']['modified'] = $now;
                        //pr($lunhanvien);die();
                    }
                    $this->DuansNhanvien->save($lunhanvien);
                    $this->DuansNhanvien->create();
                } else if ($value == 0 && isset($selects[$key])) { // Loai nhan vien ra khoi du an
                    $lunhanvien1 = $this->DuansNhanvien->find('first', array(
                        'conditions' => array(
                            'duan_id' => $id,
                            'nhanvien_id' => $key,
                        )
                            )
                    );
                    $lunhanvien1['DuansNhanvien']['public'] = '0';
                    //$this->DuansNhanVien->deleteAll(array('nhanvien_id' => $key, 'duan_id' => $id), false);
                    $this->DuansNhanvien->save($lunhanvien1);
                    $this->DuansNhanvien->create();
                }
            }


            //pr($luduan);die();
            if ($this->Duan->save($luduan)) {
                $this->_flash(__('Sửa thành công!', true), 'success');
                $this->redirect(array('action' => 'view', $id));
            } else {
                $this->set('listleader', $this->Nhanvien->listleader());
                $this->set('listnhanviens', $this->Nhanvien->listnv());
                if ($id != null) {
                    $daselects = $this->Duan->nvdachon($id);
                    //pr($daselects);die();
                    foreach ($daselects as $key => $value) {
                        if ($value['DuansNhanvien']['public'] == 1) {
                            $selects['kq'][$value['id']] = 1;
                        }
                    }
                    $this->set('select', $selects);
                    $this->Duan->id = $id;
                    $this->data = $this->Duan->read();
                    $this->data += $selects;
                }
                $this->_flash(__('Lỗi hãy thử lại', true), 'error');
            }
        } else {
            //pr($this->Nhanvien->listleader());die();
            $this->set('listleader', $this->Nhanvien->listleader());
            $this->set('listnhanviens', $this->Nhanvien->listnv());

            if ($id != null) {
                $daselects = $this->Duan->nvdachon($id);
                //pr($daselects);die();
                foreach ($daselects as $key => $value) {
                    if ($value['DuansNhanvien']['public'] == 1) {
                        $selects['kq'][$value['id']] = 1;
                    }
                }
                $this->set('select', $selects);


                $this->Duan->id = $id;
                $this->data = $this->Duan->read();
                $this->data += $selects;
            }
        }
    }

    public function delete($id = NULL) {
        if ($this->Duan->delete($id)) {
            $this->_flash(__('Xóa thành công!', true), 'success');
        } else {
            $this->_flash(__('Hãy thử lại!', true), 'error');
        }
        $this->redirect(array('action' => index));
    }

    public function deleteuser($idnv = null, $idt = null) {
        $this->loadModel('DuansNhanVien');
        //$this->TeamsNhanVien->nhanvien_id = $idnv;
        //debug($this->TeamsNhanVien);
        if ($this->DuansNhanVien->deleteAll(array('nhanvien_id' => $idnv), false)) {
            $this->_flash(__('Xóa thành công!', true), 'success');
            //$this->Session->setFlash(__('deleted'));
            $this->redirect(array('action' => 'view', $idt));
        }
        $this->_flash(__('Hãy thử lại!', true), 'error');
        //$this->Session->setFlash(__('User was not deleted'));
        //$this->redirect(array('action' => 'view',$idt));
    }

    public function khaibao() {
        $id = $this->Auth->user('nhanvien_id');
        if ($id == 0) {
            $this->_flash(__('Bạn chưa có tài khoản nhân viên. Hãy liên hệ với admin', true), 'warning');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('title_for_layout', 'Khai báo công việc hàng ngày');
        $this->set('listduan', $this->Duan->listduan());
        if (date('d') < 10) {
            $tmp = '0';
        } else {
            $tmp = '';
        }
        $now = date('Y') . '-' . date('m') . '-' . $tmp . (date('d') + 1);
        $this->set('now', $now);
        if ($this->request->is('post')) {
            $this->loadModel('Kbcongviec');
            pr($this->data);
            if ($this->Kbcongviec->save($this->request->data)) {
                $this->loadModel('NhanviensKbcongviec');
                //foreach ($variable as $key => $value) {
                //echo $this->Kbcongviec->id;
                $luu = array(
                    'NhanviensKbcongviec' => array(
                        'nhanvien_id' => $this->Auth->user('nhanvien_id'),
                        'kbcongviec_id' => $this->Kbcongviec->id
                    )
                );
                //pr($luu);
                $this->NhanviensKbcongviec->save($luu);
                //$this->TeamsNhanVien->save($lunhanvien);
                //}
                $this->_flash(__('Lưu thành công!', true), 'success');
                //$this->Session->setFlash(__('Lưu thành công!'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->_flash(__('Lỗi. Bạn hãy thử lại!', true), 'error');
                //$this->Session->setFlash(__('Lỗi. Bạn hãy thử lại!'));
                $this->request->data = null;
            }
        }
    }

    public function listchamcong() {
        $this->set('title_for_layout', 'Danh sách dự án của bạn');
        $now = date('Y') . '-' . date('m') . '-' . (date('d'));
        $this->set('now', $now);
        //echo $now;
        $id = $this->Auth->user('nhanvien_id');
        if ($id == 0) {
            $this->_flash(__('Bạn chưa có tài khoản nhân viên. Hãy liên hệ với admin', true), 'warning');
            $this->redirect(array('action' => 'index'));
        }
        $this->set('duans', $this->Duan->listduanchamcong($id));
    }

    public function chamcong($id = null) {
        $this->set('title_for_layout', 'Chấm công');
        if (!$this->Duan->exists($id)) {
            throw new NotFoundException(__('Invalid chucvus'));
        }
        $this->loadModel('Kbcongviec');
        //$this->loadModel('Nhanvien');
        $duan = $this->Duan->xemduan($id);
        //pr($duan);die();
        $tmp = 0;
        foreach ($duan['Nhanvien'] as $key => $value) {
            //echo $id;
            $cv[$key] = $this->Kbcongviec->find('all', array(
                'conditions' => array(
                    'id_nhanvien =' => $value['id'],
                    'id_duan =' => $id,
                    'cham ' => null)
                    )
            );
            if ($cv[$key] == null) {
                $tmp = 1;
            } else {
                $tmp*=0;
            }
        }
        foreach ($duan['Nhanvien'] as $key => $value) {
            $listcham[$key] = $this->Kbcongviec->find('all', array(
                'conditions' => array(
                    'id_nhanvien =' => $value['id'],
                    'id_duan =' => $id,
                    'cham !=' => null)
                    )
            );
        }
        $this->set('duan', $duan['duan']);
        $this->set('id', $id);
        $this->set('nhanviens', $duan['Nhanvien']);
        if ($tmp == 1)
            $cv = null;
        $this->set('liscvs', $cv);
        $this->set('listchams', $listcham);
        if ($this->request->is('post')) {
            $tmp = 1;
            foreach ($this->request->data['Kbcongviec'] as $i => $value) {
                $luu = $this->Kbcongviec->xemcv($i, $id);
                $luu['Kbcongviec']['cham'] = $value;
                if ($this->Kbcongviec->save($luu)) {
                    //$tmp*=1;
                } else {
                    $tmp = 0;
                    $break;
                }
            }
            if ($tmp = 1) {
                $this->_flash(__('Lưu thành công!', true), 'success');
                //$this->Session->setFlash(__('Lưu thành công!'));
                $this->redirect(array('action' => 'chamcong', $id));
            } else {
                $this->_flash(__('Lỗi. Bạn hãy thử lại!', true), 'error');
                //$this->Session->setFlash(__('Lỗi. Bạn hãy thử lại sau'));
            }
        }
    }

    public function rechamcong($id) {
        //$this->Kbcongviec->
    }

    public function ketthucduan($id = null) {
        if (!$this->Duan->exists($id)) {
            throw new NotFoundException(__('Invalid chucvus'));
        }
        $now = date('Y') . '-' . date('m') . '-' . (date('d'));
        $luu = $this->Duan->findById($id);
        $luu['duan']['ngayKetThuc'] = $now;
        if ($this->Duan->save($luu)) {
            $this->_flash(__('Lưu thành công!', true), 'success');
            //$this->Session->setFlash(__('Lưu thành công!'));
            $this->redirect(array('action' => 'listchamcong'));
        } else {
            $this->_flash(__('Lỗi. Bạn hãy thử lại!', true), 'error');
            //$this->Session->setFlash(__('Lỗi. Bạn hãy thử lại sau'));
        }
    }

}

?>
