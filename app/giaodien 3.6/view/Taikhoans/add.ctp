<div class="taikhoans form">
<?php echo $this->Form->create('Taikhoan'); ?>
	<fieldset>
		<legend><?php echo __('Add Taikhoan'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		//echo $this->Form->input('nhanvien_id');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Taikhoans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'nhanviens', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nhanvien'), array('controller' => 'nhanviens', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
