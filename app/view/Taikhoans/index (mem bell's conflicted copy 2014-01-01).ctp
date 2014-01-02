<div class="row title">
		<h2><?php echo __('Danh sách tài khoản'); ?></h2>
		<div class="col-md-2"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
</div>
<div class="row index">

	<div id="container">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
          <tr>
                        <th>username</th>
			<th>password</th>
			<!--<th>nhanvien_id'); ?></th>-->
			
			<th>id</th>
			<th>Actions</th>
          </tr>
        </thead>
        <tbody>
	<?php foreach ($taikhoans as $taikhoan): ?>
	<tr>
		<td><?php echo h($taikhoan['Taikhoan']['username']); ?>&nbsp;</td>

		<td><?php echo h($taikhoan['Taikhoan']['password']); ?>&nbsp;</td>
		<!--<td>
			<?php echo $this->Html->link($taikhoan['Nhanvien']['id'], array('controller' => 'nhanviens', 'action' => 'view', $taikhoan['Nhanvien']['id'])); ?>
		</td>-->
		
		<td><?php echo h($taikhoan['Taikhoan']['id']); ?>&nbsp;</td>
		<td class="actions">
				<?php 
				echo $this->Html->link(
				     $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
				    array('action' => 'edit', $taikhoan['Taikhoan']['id']),
				    array('escapeTitle' => false)
				);
			?>
			<?php 
				echo $this->Html->link(
				     $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
				    array('action' => 'delete', $taikhoan['Taikhoan']['id']),  array('escapeTitle' => false), __('Bạn có chắc rằng muốn xóa %s không?', $taikhoan['Taikhoan']['username'])
				);
			?>
			 
		</td>
	</tr>
<?php endforeach; ?>
</tbody>
	</table>