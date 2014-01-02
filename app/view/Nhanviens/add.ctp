
<div class="row title">
	<h2>Thêm Nhân Viên Mới</h2>
</div>

<div class="row index add">
	<form class="form-horizontal" method='post' role="form" enctype="multipart/form-data">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Nhân Viên</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][tenNhanVien]" maxlength="255" type="text" id="NhanvienTenNhanVien" required="required" placeholder="Tên Nhân Viên" >
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Ảnh</label>
	    <div class="col-sm-10">
	      <input type="file" name="data[Nhanvien][anh]" class="form-control" >
	    </div>
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" name="data[Nhanvien][email]" class="form-control" required="required">
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Ngày Vào</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Nhanvien][ngayVao]" class="form-control" required="required">
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Năm Sinh</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][namSinh]" type="text" id="NhanvienNamSinh" placeholder="Năm Sinh" required="required">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Địa Chỉ</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][diaChi]" maxlength="100" type="text" id="NhanvienDiaChi" placeholder="Địa Chỉ" required="required">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Số Điện Thoại</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][soDT]" type="text" id="NhanvienSoDT" placeholder="Số Điện Thoại" required="required">
	    </div>
	  </div>
	    <div class="form-group">
	    <label  class="col-sm-2 control-label">Chuyên Ngành</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][chuyenNganh]" maxlength="15" type="text" id="NhanvienChuyenNganh" placeholder="Chuyên Ngành" required="required">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Tài khoản</label>
	    <div class="col-sm-10">
	     <?php echo $this->Form->select('taikhoan_id',$taikhoans, array('style'=>'float: left;', 'name'=>'data[Nhanvien][taikhoan_id]')); ?>
	    </div>
	  </div>
	      <div class="form-group">
	    <label  class="col-sm-2 control-label">Chức Vụ</label>
	    <div class="col-sm-10">
	     <?php echo $this->Form->select('chucvu_id',$option, array('style'=>'float: left;', 'name'=>'data[Nhanvien][chucvu_id]')); ?>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Thêm</button>
	    </div>
	  </div>
	</form>
</div>









 <!--  <div class="nhanviens form">
<?php echo $this->Form->create('Nhanvien'); ?>
	<fieldset>
		<legend><?php echo __('Add Nhanvien'); ?></legend>
	<?php
		echo $this->Form->input('tenNhanVien');
		echo $this->Form->input('ngayVao');
		echo $this->Form->input('ngayRa');
		echo $this->Form->input('namSinh');
		echo $this->Form->input('diaChi');
		echo $this->Form->input('soDT');
		echo $this->Form->input('chuyenNganh');
		echo $this->Form->input('taikhoan_id');
		echo '<br>';
		echo $this->Form->select('chucvu_id',$option);
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Nhanviens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chucvu'), array('controller' => 'chucvu', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
		
	</ul>
</div>  -->