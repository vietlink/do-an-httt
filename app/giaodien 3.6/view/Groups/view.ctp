<div class="groups view">
<h2><?php  echo __('Group'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($group['Group']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($group['Group']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($group['Group']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($group['Group']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group'), array('action' => 'edit', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group'), array('action' => 'delete', $group['Group']['id']), null, __('Are you sure you want to delete # %s?', $group['Group']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Taikhoans'); ?></h3>
	<?php if (!empty($group['Taikhoan'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Nhanvien Id'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($group['Taikhoan'] as $taikhoan): ?>
		<tr>
			<td><?php echo $taikhoan['username']; ?></td>
			<td><?php echo $taikhoan['password']; ?></td>
			<td><?php echo $taikhoan['nhanvien_id']; ?></td>
			<td><?php echo $taikhoan['group_id']; ?></td>
			<td><?php echo $taikhoan['id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'taikhoans', 'action' => 'view', $taikhoan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'taikhoans', 'action' => 'edit', $taikhoan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'taikhoans', 'action' => 'delete', $taikhoan['id']), null, __('Are you sure you want to delete # %s?', $taikhoan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
