<div class="row title">
    <h2>HOẠT ĐỘNG</h2>
</div>
<div class="hoatdongs index">
	<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('tenHoatDong'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th><?php echo $this->Paginator->sort('noiDung'); ?></th>
				<th><?php echo $this->Paginator->sort('modifined'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<tbody>
	<?php foreach ($hoatdongs as $hoatdong): ?>
	<tr>
		<td><?php echo h($hoatdong['Hoatdong']['id']); ?>&nbsp;</td>
		<td><?php echo h($hoatdong['Hoatdong']['tenHoatDong']); ?>&nbsp;</td>
		<td><?php echo h($hoatdong['Hoatdong']['created']); ?>&nbsp;</td>
		<td><?php echo $this->Html->link(__($hoatdong['Hoatdong']['mota']), array('action' => 'view', $hoatdong['Hoatdong']['id'])); ?></td>
		<td><?php echo h($hoatdong['Hoatdong']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $hoatdong['Hoatdong']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $hoatdong['Hoatdong']['id']), null, __('Are you sure you want to delete # %s?', $hoatdong['Hoatdong']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Hoatdong'), array('action' => 'add')); ?></li>
	</ul>
</div>
