<div class="taikhoans form">
<?php echo $this->Form->create('Taikhoan'); ?>
	<fieldset>
		<legend><?php echo __('Edit Taikhoan'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('id_nhanvien');
		echo $this->Form->input('group_id');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Taikhoan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Taikhoan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
