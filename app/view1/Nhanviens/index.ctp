<div class="row title">
	<h2>NHÂN VIÊN</h2>
	<div class="col-md-2"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
</div>


<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
          <tr>
<!--             <th>id</th> -->
			<th>Tên</th>
			<th>Ngày Vào</th>
			<th>Năm Sinh</th>
			<th>Địa Chỉ</th>
			<th>SĐT</th>
			<th>chuyên Ngành</th>
			<th>Account</th>
			<th>Chức Vụ</th>
			<th class="actions"><?php echo __('Actions'); ?></th>
          </tr>
        </thead>
	 <tbody>
	<?php foreach ($nhanviens as $nhanvien): ?>
	<tr>
		<!-- <td><?php echo h($nhanvien['Nhanvien']['id']); ?>&nbsp;</td> -->

		<td><?php echo $this->Html->link(__($nhanvien['Nhanvien']['tenNhanVien']), array('action' => 'view', $nhanvien['Nhanvien']['id']));?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['ngayVao']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['namSinh']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['diaChi']); ?>&nbsp;</td>
		<td><?php echo h('0'.$nhanvien['Nhanvien']['soDT']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['chuyenNganh']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Taikhoan']['username']); ?>&nbsp;</td>
		<td>
			<?php echo $nhanvien['Chucvu']['tenChucVu']; ?>
		</td>
		<td class="actions">
			<?php 
				echo $this->Html->link(
				    $this->Html->image('iconPhang/editicon.png', array('style' => 'width: 20px')),
				    array('action' => 'edit', $nhanvien['Nhanvien']['id']),
				    array('escapeTitle' => false)
				);
			?>
			<?php 
				echo $this->Html->link(
				    $this->Html->image('iconPhang/deleteicon.png', array('style' => 'width: 20px')),
				    array('action' => 'delete', $nhanvien['Nhanvien']['id']),  array('escapeTitle' => false), __('Bạn có chắc rằng muốn xóa %s không?', $nhanvien['Nhanvien']['tenNhanVien'])
				);
			?>
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
	</table>
	<!--
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>-->
</div>




TO DO...
 <div class="actions">
		<h3><?php echo __('Tài Khoản'); ?></h3>
			<ul>
				<li><?php echo $this->Html->link(__('Logout'), array('controller' => 'taikhoans', 'action' => 'logout')); ?> </li>
				<li><?php echo $this->Html->link(__('Login'), array('controller' => 'taikhoans', 'action' => 'login')); ?> </li>
			</ul>
		</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Nhanvien'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group'), array('controller' => 'Groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'Teams', 'action' => 'index')); ?> </li>
	</ul>
</div> 