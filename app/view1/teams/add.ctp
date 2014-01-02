<div class="Teams form">
	<?php echo $this->form->create('Team',array('action'=>'add')); ?>
	<?php echo $this->form->input('name',array('label'=>'Tên','placeholder' => 'Tên Team','required'=>"required"));?>
	<?php echo $this->form->input('parent_id',array('label'=>'Mục','options'=>$data));?>
		<?php echo $this->form->label('Quản lý');?>
		<?php echo $this->form->select('quanly_id',$listnhanviens);?>
		<div class="related">
			<h3><?php echo __('Nhân viên'); ?></h3>
			<div id="container">
				<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
						<th>
						chọn
						</th>
						<th>
						Tên
						</th>
					</tr>
				</thead>
				<tbody>
				<!--
				<th>
			<?php echo $this->Form->input('nhanvien_id',array('multiple'=>'checkbox','options'=>$listnhanviens,'selected' => $select)); ?>
			</th>-->
			<?php foreach ($listnhanviens as $key => $value):?>
				<tr>
				<td><?php echo $this->Form->checkbox('kq.'.$key,array('value'=>1)) ?></td>
				<td><?php echo $value; ?></td>
				</tr>
			<?php endforeach; ?>
			
			</tbody>
			</table>
		</div>
		</div>
	<?php echo $this->form->end('OK'); ?>
</div>
 <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Team'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller'=>'Nhanviens','action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
	</ul>
</div>