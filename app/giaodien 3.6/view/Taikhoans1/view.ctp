<div class="taikhoans view">
<h2><?php  echo __('Taikhoan'); ?></h2>
	<dl>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($taikhoan['Taikhoan']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($taikhoan['Taikhoan']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Nhanvien'); ?></dt>
		<dd>
			<?php echo h($taikhoan['Taikhoan']['id_nhanvien']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($taikhoan['Group']['name'], array('controller' => 'groups', 'action' => 'view', $taikhoan['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($taikhoan['Taikhoan']['id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Taikhoan'), array('action' => 'edit', $taikhoan['Taikhoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Taikhoan'), array('action' => 'delete', $taikhoan['Taikhoan']['id']), null, __('Are you sure you want to delete # %s?', $taikhoan['Taikhoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
