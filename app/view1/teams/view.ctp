 

<div class="Team view">
<h2><?php  echo __('Team'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($team['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tên TEAM'); ?></dt>
		<dd>
			<?php echo h($team['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Người quản lý'); ?></dt>
		<dd>
			<?php echo $this->Html->link(__($quanly['tenNhanVien']), array('controller' => 'Nhanviens', 'action' => 'view', $quanly['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
 

 <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('edit Team'), array('controller' => 'Teams', 'action' => 'edit', $team['id'])); ?></li>
		<li><?php echo $this->Html->link(__('List Team'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Add Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller'=>'Nhanviens','action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
	</ul>
</div>



<div class="related">
<?php if (!empty($nhanvien)): ?>
	<h3><?php echo __('Nhân viên'); ?></h3>
	
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Tên'); ?></th>
		<th><?php echo __('Chuyên Ngành'); ?></th>
		<th><?php echo __('Năm sinh'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($nhanvien as $taikhoan): ?>
		<tr>
			<td><?php echo $this->Html->link(__($taikhoan['tenNhanVien']), array('controller' => 'Nhanviens', 'action' => 'view', $taikhoan['id']));?></td>
			<td><?php echo $taikhoan['chuyenNganh']; ?></td>
			<td><?php echo $taikhoan['namSinh']; ?></td>
			<td class="actions">
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Teams', 'action' => 'deleteuser', $taikhoan['id'],$team['id']), null, __('Are you sure you want to delete  %s?', $taikhoan['tenNhanVien'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>





