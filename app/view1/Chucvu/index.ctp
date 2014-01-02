<div class="row title">
	<h2>CHỨC VỤ</h2>
	<div class="col-md-2"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
</div>



<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
	<thead>
		<tr>
				<th>id</th>
				<th>Tên Chức Vụ</th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($chucvuses as $chucvus): ?>
		<tr>
			<td><?php echo h($chucvus['Chucvu']['id']); ?>&nbsp;</td>
			<td><?php echo $chucvus['Chucvu']['tenChucVu'];?>&nbsp;
			</td>
			<td class="actions">
				<?php 
					echo $this->Html->link(
					    $this->Html->image('iconPhang/editicon.png', array('style' => 'width: 20px')),
					    array('action' => 'edit', $chucvus['Chucvu']['id']),
					    array('escapeTitle' => false)
					);
				?>
				<?php 
					echo $this->Html->link(
					    $this->Html->image('iconPhang/deleteicon.png', array('style' => 'width: 20px')),
					    array('action' => 'delete', $chucvus['Chucvu']['id']),  array('escapeTitle' => false), __('Bạn muốn xóa chức vụ:  %s?', $chucvus['Chucvu']['tenChucVu'])
					);
				?>			
			</td>
		</tr>
		<?php endforeach; ?>
	</tbody>
	</table>
	<!-- <p>
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
	</div> -->
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
		<li><?php echo $this->Html->link(__('New Chucvu'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'Nhanviens', 'action' => 'index')); ?> </li>
	</ul>
</div>
