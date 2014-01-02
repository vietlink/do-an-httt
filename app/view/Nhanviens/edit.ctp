<div class="row title">
	<h2>SỬA THÔNG TIN NHÂN VIÊN</h2>
</div>

<div class="row index add">
	<form class="form-horizontal" method='post' role="form" role="form" enctype="multipart/form-data">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Nhân Viên</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][tenNhanVien]" maxlength="255" type="text" id="NhanvienTenNhanVien" value="<?php echo $this->data['Nhanvien']['tenNhanVien'];?>" required="required" placeholder="Tên Nhân Viên" >
	    </div>
	  </div>
		<div class="form-group">
	    <label class="col-sm-2 control-label">Ảnh</label>
	    <div class="col-sm-10">
	    	<input type="file" name="data[Nhanvien][anh]" class="form-control" >
	    	<input type="text" value="<?php echo $image; ?>" name="data[Nhanvien][anhcu]" hidden="">
	    </div>
	    <?php if($image!=null):?>
	    	<?php echo $this->Html->image('ava/ '.$image, array('alt' => '', 'class'=>'img-circle')); ?>
		<?php else: ?>
			<?php echo $this->Html->image('ava/membell.png', array('alt' => '', 'class'=>'img-circle')); ?>
		<?php endif; ?> 
	  </div>
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Email</label>
	    <div class="col-sm-10">
	      <input type="email" name="data[Nhanvien][email]" class="form-control" value="<?php echo $this->data['Nhanvien']['email'];?>" required>
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Ngày Vào</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Nhanvien][ngayVao]" value="<?php echo $this->data['Nhanvien']['ngayVao'];?>" class="form-control" required>
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Ngày Ra</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Nhanvien][ngayRa]" value="<?php echo $this->data['Nhanvien']['ngayRa'];?>" class="form-control" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Năm Sinh</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][namSinh]" type="text" id="NhanvienNamSinh" placeholder="Năm Sinh" value="<?php echo $this->data['Nhanvien']['namSinh'];?>"  required="required">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Địa Chỉ</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][diaChi]" maxlength="100" type="text" id="NhanvienDiaChi" value="<?php echo $this->data['Nhanvien']['diaChi'];?>" placeholder="Địa Chỉ" required="required">
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Số Điện Thoại</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][soDT]" type="text" id="NhanvienSoDT" placeholder="Số Điện Thoại" value="<?php echo $this->data['Nhanvien']['soDT'];?>" required="required">
	    </div>
	  </div>
	    <div class="form-group">
	    <label  class="col-sm-2 control-label">Chuyên Ngành</label>
	    <div class="col-sm-10">
	      <input name="data[Nhanvien][chuyenNganh]" maxlength="15" type="text" id="NhanvienChuyenNganh" value="<?php echo $this->data['Nhanvien']['chuyenNganh'];?>" placeholder="Chuyên Ngành" required="required">
	    </div>
	  </div>
	  <input name="data[Nhanvien][id]" hidden='' value="<?php echo $this->data['Nhanvien']['id'];?>" />
	  <?php echo $this->Form->number('cu',array('value'=>$select,'hidden'=>''));?>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Tài khoản</label>
	    <div class="col-sm-10">
	     <?php echo $this->Form->select('taikhoan_id',$taikhoans, array('style'=>'float: left;', 'name'=>'data[Nhanvien][taikhoan_id]', 'value'=> $select )); ?>
	    </div>
	  </div>
	      <div class="form-group">
	    <label  class="col-sm-2 control-label">Chức Vụ</label>
	    <div class="col-sm-10">
	     <?php echo $this->Form->select('Nhanvien.chucvu_id',$option, array('style'=>'float: left;', 'name'=>'data[Nhanvien][chucvu_id]', 'value'=> $this->data['Nhanvien']['chucvu_id'] )); ?>
	    </div>
	  </div>
	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Sửa xong</button>
	    </div>
	  </div>
	</form>
</div>



<!-- 
<div class="nhanviens form">
<?php echo $this->Form->create('Nhanvien'); ?>
	<fieldset>
		<legend><?php echo __('Edit Nhanvien'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tenNhanVien');
		echo $this->Form->input('ngayVao');
		echo $this->Form->input('ngayRa');
		echo $this->Form->input('namSinh');
		echo $this->Form->input('diaChi');
		echo $this->Form->input('soDT');
		echo $this->Form->input('chuyenNganh');
		echo $this->Form->select('taikhoan_id',$taikhoans);
		echo '<br>';
		echo $this->Form->select('chucvu_id',$option);

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Nhanvien.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Nhanvien.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chucvu'), array('controller' => 'chucvu', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->