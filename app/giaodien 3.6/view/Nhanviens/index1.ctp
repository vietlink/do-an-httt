<div class="nhanviens index">
	<h2><?php echo __('Nhanviens'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tenNhanVien'); ?></th>
			<th><?php echo $this->Paginator->sort('ngayVao'); ?></th>
			<th><?php echo $this->Paginator->sort('ngayRa'); ?></th>
			<th><?php echo $this->Paginator->sort('namSinh'); ?></th>
			<th><?php echo $this->Paginator->sort('diaChi'); ?></th>
			<th><?php echo $this->Paginator->sort('soDT'); ?></th>
			<th><?php echo $this->Paginator->sort('chuyenNganh'); ?></th>
			<th><?php echo $this->Paginator->sort('acount'); ?></th>
			<th><?php echo $this->Paginator->sort('chucvu_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($nhanviens as $nhanvien): ?>
	<tr>
		<td><?php echo h($nhanvien['Nhanvien']['id']); ?>&nbsp;</td>

		<td><?php echo $this->Html->link(__($nhanvien['Nhanvien']['tenNhanVien']), array('action' => 'view', $nhanvien['Nhanvien']['id']));?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['ngayVao']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['ngayRa']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['namSinh']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['diaChi']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['soDT']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Nhanvien']['chuyenNganh']); ?>&nbsp;</td>
		<td><?php echo h($nhanvien['Taikhoan']['username']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nhanvien['Chucvu']['tenChucVu'], array('controller' => 'chucvu', 'action' => 'view', $nhanvien['Chucvu']['id'])); ?>
		</td>
		<td class="actions">
			<!--<?php echo $this->Html->link(__('View'), array('action' => 'view', $nhanvien['Nhanvien']['id'])); ?>-->
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nhanvien['Nhanvien']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nhanvien['Nhanvien']['id']), null, __('Are you sure you want to delete # %s?', $nhanvien['Nhanvien']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
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
	</div>
</div>
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
