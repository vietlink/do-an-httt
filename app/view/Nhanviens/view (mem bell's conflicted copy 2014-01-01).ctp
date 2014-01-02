<style type="text/css">
	div.member-box {
		margin: 0 auto;
		width: 250px;
		background: #DDDDDD;
		border-radius: 8px 8px 0 0;
		padding-top: 19px;
		padding-bottom: 10px;
	}

	div.member-contact {
		margin: 0 auto;
		width: 250px;
		height: 50px;
		overflow: hidden;
		position: relative;
		background: #ddd;
	}

	div.member-contact div.btn-plus {
		text-align: center;
		font-family: 'Open Sans', sans-serif;
		font-size: 23px;
		font-weight: 700;
		color: #f3f3f3;
		width: 250px;
		height: 67px;
		position: absolute;
		top: 0px;
		padding-top: 12px;
		background: #fe5c57;
		transition-duration: .5s;
	}

	div.member-contact:hover > div.btn-plus {
		top: 70px;
		transition-duration: .25s;
	}

	div.member-contact .contact-list {
		width: 145px;
		height: 27px;
		text-align: center;
		margin: auto;
		padding: 20px 0;
	}

	div.member-contact .t-fb {
		float: left;
		background: url(/da/img/t-fb.png) no-repeat;
		width: 28px;
		height: 27px;
		margin: -8px 36px;
	}

	div.member-contact .t-mail {
		float: left;
		background: url(/da/img/t-mail.png) no-repeat;
		width: 28px;
		height: 27px;
		margin: -8px -28px;
	}

	div.member-contact .t-fb:hover, div.member-contact .t-mail:hover {
		background-position: 0 -27px; cursor: pointer;
	}

	div.member-contact span.offline {
		position: absolute;
		left: 76px;
		top: 5px;
		opacity: 0.8;
	}

	div.member-contact span.time {
		position: absolute;
		top: 30px;
		left: 51px;
		font-size: 16px;
	}
</style>


<div class="row title">
	<h2>THÔNG TIN CÁ NHÂN</h2>
</div>
<div class="row" style="margin-bottom: 20px;">
	<div class="col-md-4"><?php echo $this->Html->link(__('Chỉnh Sửa'), array('action' => 'edit', $nhanvien['Nhanvien']['id']),array('class' => 'button')); ?></div>
	<div class="col-md-4"><?php echo $this->Html->link(__('Delete'), array('action' => 'delete', $nhanvien['Nhanvien']['id']), array('class'=>'button'), __('Are you sure you want to delete # %s?', $nhanvien['Nhanvien']['id'])); ?></div>
	<div class="col-md-4"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
	<div class="col-md-4"><?php echo $this->Html->link(__('Danh Sách Nhân Viên'), array('action' => 'index'),array('class' => 'button')); ?></div>
	<div class="col-md-4"><?php echo $this->Html->link(__('Danh Sách Chức Vụ'), array('controller' => 'chucvu', 'action' => 'index'),array('class' => 'button')); ?></div>
	<div class="col-md-4"><?php echo $this->Html->link(__('Danh Sách Tài Khoản'), array('controller' => 'taikhoans', 'action' => 'index'),array('class' => 'button')); ?></div>
</div>
<!-- <?php if(isset($nghi)): ?>
	<p>Hiện tại đang nghỉ</p>
	<p><?php echo $nghi['Xinnghi']['lydo']; ?></p>
	<p><?php echo $nghi['Xinnghi']['batdau']; ?></p>
	<p><?php echo $nghi['Xinnghi']['ketthuc']; ?></p>
<?php endif; ?> -->

<div class="member-box">
<?php if($nhanvien['Nhanvien']['anh']!=null): ?>
	<?php echo $this->Html->image('ava/'.$nhanvien['Nhanvien']['anh'], array('alt' => '', 'class'=>'img-circle')); ?>
<?php else: ?>
	<?php echo $this->Html->image('ava/membell.png', array('alt' => '', 'class'=>'img-circle')); ?>
<?php endif; ?> 
</div>
<div class="member-contact">
	<?php if(isset($nghi)): ?>
	<div class="btn-plus">
		<span class="offline">Đang nghỉ</span>
		<span class="time"><?php echo $nghi['Xinnghi']['ketthuc']; ?></span>
	</div>
	
	<?php endif; ?>
	<div class="contact-list">
		<a href="#" class="t-fb"></a>
		<a href="mailto:#" class="t-mail"></a>
	</div>
</div>


<div class="row main infoPersonal">
			<div class="col-md-6"> 
			<p>Thông Tin Đầy Đủ</p>
				  <table class="table table-bordered">
			          	<tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
font-weight: bold;color: #fff;">THÔNG TIN CƠ BẢN</p></td></tr>
						<tr>
			              <td class="pTable">Tên</td>
			              <td><?php echo h($nhanvien['Nhanvien']['tenNhanVien']); ?></td>
			            </tr>
			            <tr>
			              <td class="pTable">Ngày Sinh</td>
			              <td><?php echo h($nhanvien['Nhanvien']['namSinh']); ?></td>
			            </tr>
			            <tr>
			              <td class="pTable">Địa chỉ</td>
			              <td><?php echo h($nhanvien['Nhanvien']['diaChi']); ?></td>
			            </tr>
			            <tr>
			              <td class="pTable">Số điện thoại</td>
			              <td><?php echo h('0'.$nhanvien['Nhanvien']['soDT']); ?></td>
			            </tr>
			            <tr>
			              <td class="pTable">Email</td>
			              <td><?php echo h($nhanvien['Nhanvien']['email']); ?></td>
			            </tr>			            
			            <tr>
			              <td class="pTable">Ngày vào</td>
			              <td><?php echo h($nhanvien['Nhanvien']['ngayVao']); ?></td>
			            </tr>
			            <?php if($nhanvien['Nhanvien']['ngayRa']!=null): ?>
			            <tr>
			              <td class="pTable">Ngày ra</td>
			              <td><?php echo h($nhanvien['Nhanvien']['ngayRa']); ?></td>
			            </tr>
			        <?php endif; ?>
			            <tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
font-weight: bold;color: #fff;">THÔNG TIN CÔNG VIỆC - HỌC VẤN</p></td></tr>
			            <tr>
			              <td class="pTable">Nhóm - bộ phận</td>
			              <td><a><?php echo h($nhanvien['Nhanvien']['chuyenNganh']); ?></a></td>
			            </tr>
			            <tr>
			              <td class="pTable">Chức vụ</td>
			              <td><?php echo $this->Html->link($nhanvien['Chucvu']['tenChucVu'], array('controller' => 'chucvu', 'action' => 'view', $nhanvien['Chucvu']['id'])); ?></td>
			            </tr>			            
			        </table>
			</div>
			<div class="col-md-6">
				<p>Kinh nghiệm - Các dự án đã tham gia</p>
				<table class="table table-bordered">
		          <thead>
		            <tr>
		              <th>STT</th>
		              <th>Tên Dự Án</th>
		              <th>Vai Trò</th>
		            </tr>
		          </thead>
		          <tbody>
		          <?php foreach ($nhanvien['duan'] as $i=>$value): ?>
		            <tr>
		              <td><?php echo $i+1; ?></td>
		              <td><?php echo $this->Html->link($value['tenDuAn'], array('controller' => 'duans', 'action' => 'view', $value['id']));?></td>
		              <td><?php echo $value['DuansNhanvien']['vitri']; ?></td>
		            </tr>
		            <?php endforeach; ?>
		          </tbody>
		        </table>
			</div>
			
</div>
<div >
				<p>Timeline</p>
				<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		          <thead>
		            <tr>
		              <th>STT</th>
		              <th>Tên Dự Án</th>
		              <th>TIME</th>
		              <th>CÔNG VIỆC</th>
		            </tr>
		          </thead>
		          <tbody>
		          <?php foreach ($cvs as $i=>$value): ?>
		            <tr>
		              <td><?php echo $i+1; ?></td>
		              <td><?php echo $this->Html->link($value['Kbcongviec']['tenDuan'], array('controller' => 'duans', 'action' => 'view', $value['Kbcongviec']['id_duan']));?></td>
		              <td><?php echo $value['Kbcongviec']['ngay']; ?></td>
		              <td><?php echo $value['Kbcongviec']['congviec']; ?></td>
		            </tr>
		            <?php endforeach; ?>
		          </tbody>
		        </table>
			</div>

</br>
</br>
</br>
</br>
</br>
<!--
<div class="nhanviens view">
<h2><?php  echo __('Nhanvien'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nhanvien['Nhanvien']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TenNhanVien'); ?></dt>
		<dd>
			<?php echo h($nhanvien['Nhanvien']['tenNhanVien']); ?>
			&nbsp;
		</dd>

		<dt><?php echo __('ChuyenNganh'); ?></dt>
		<dd>
			<?php echo h($nhanvien['Nhanvien']['chuyenNganh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acount'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nhanvien['Taikhoan']['username'], array('controller' => 'Taikhoans', 'action' => 'view', $nhanvien['Taikhoan']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nhanvien'), array('action' => 'edit', $nhanvien['Nhanvien']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nhanvien'), array('action' => 'delete', $nhanvien['Nhanvien']['id']), null, __('Are you sure you want to delete # %s?', $nhanvien['Nhanvien']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nhanvien'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
	</ul>
</div>
-->