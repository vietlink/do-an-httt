<div class="chucvuses view">
<h2><?php  echo __('Chucvu'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($chucvus['Chucvu']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TenChucVu'); ?></dt>
		<dd>
			<?php echo h($chucvus['Chucvu']['tenChucVu']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Chucvu'), array('action' => 'edit', $chucvus['Chucvu']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Chucvu'), array('action' => 'delete', $chucvus['Chucvu']['id']), null, __('Are you sure you want to delete # %s?', $chucvus['Chucvu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chucvu'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'Nhanviens', 'action' => 'index')); ?> </li>
	</ul>
</div>
