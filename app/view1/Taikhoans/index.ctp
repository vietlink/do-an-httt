<div class="row title">
	<h2>TÀI KHOẢN</h2>
</div>
<div class="row title">
	
</div>
<div class="taikhoans index">
	<div id="container">
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
          <tr>
            <th>username</th>
			<!--<th>nhanvien_id'); ?></th>-->
			<th>Level</th>
			<th>id</th>
			<th>Actions</th>
          </tr>
        </thead>
        <tbody>
	<?php foreach ($taikhoans as $taikhoan): ?>
	<tr>
		<td><?php echo $taikhoan['Taikhoan']['username']; ?>&nbsp;</td>

		<!--<td>
			<?php echo $this->Html->link($taikhoan['Nhanvien']['id'], array('controller' => 'nhanviens', 'action' => 'view', $taikhoan['Nhanvien']['id'])); ?>
		</td>-->
		<td>
		<?php if($taikhoan['Taikhoan']['group_id']==1): ?>
			<?php echo 'Admin'; ?>
		<?php elseif($taikhoan['Taikhoan']['group_id']==2): ?>
			<?php echo 'Leader'; ?>
		<?php elseif($taikhoan['Taikhoan']['group_id']==3): ?>
			<?php echo 'Subleader'; ?>
		<?php elseif($taikhoan['Taikhoan']['group_id']==4): ?>
			<?php echo 'News'; ?>
		<?php else: ?>
			<?php echo 'User'; ?>
		<?php endif; ?>
		</td>
		<td><?php echo h($taikhoan['Taikhoan']['id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $taikhoan['Taikhoan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $taikhoan['Taikhoan']['id']), null, __('Are you sure you want to delete # %s?', $taikhoan['Taikhoan']['id'])); ?>
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
	</div>
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
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'nhanviens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'Teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
	</ul>
</div>
-->