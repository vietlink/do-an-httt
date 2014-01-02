<div class="row title">
	<h2>Chức Vụ</h2>
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
			<td><?php echo $this->Html->link(__($chucvus['Chucvu']['tenChucVu']), array('action' => 'view', $chucvus['Chucvu']['id']));?>&nbsp;
			</td>
			<td class="actions">
				<?php 
					echo $this->Html->link(
					    $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
					    array('action' => 'edit', $chucvus['Chucvu']['id']),
					    array('escapeTitle' => false)
					);
				?>
				<?php 
					echo $this->Html->link(
					    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
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