<div class="hoatdongs view">
<h2><?php  echo __('Hoatdong'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hoatdong['Hoatdong']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TenHoatDong'); ?></dt>
		<dd>
			<?php echo h($hoatdong['Hoatdong']['tenHoatDong']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($hoatdong['Hoatdong']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoiDung'); ?></dt>
		<dd>
			<?php echo $hoatdong['Hoatdong']['noiDung']; ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modifined'); ?></dt>
		<dd>
			<?php echo h($hoatdong['Hoatdong']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hoatdong'), array('action' => 'edit', $hoatdong['Hoatdong']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hoatdong'), array('action' => 'delete', $hoatdong['Hoatdong']['id']), null, __('Are you sure you want to delete # %s?', $hoatdong['Hoatdong']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hoatdongs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hoatdong'), array('action' => 'add')); ?> </li>
	</ul>
</div>
