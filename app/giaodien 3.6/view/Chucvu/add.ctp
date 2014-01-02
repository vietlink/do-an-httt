

<div class="row title">
	<h2>Thêm Chức Vụ Mới</h2>
</div>

<div class="row index form">
	<form class="form-horizontal" method='post' role="form">
		<div class="field_text">
			<input name="data[Chucvu][tenChucVu]" maxlength="50" type="text" id="ChucvuTenChucVu" placeholder="Nhập tên" required>
		    <button href="#" type="submit" class="button">Thêm</button>
		</div>
	</form>
</div>




<!-- 
 <div class="chucvuses form">
<?php echo $this->Form->create('Chucvu'); ?>
	<fieldset>
		<legend><?php echo __('Add Chucvu'); ?></legend>
	<?php
		echo $this->Form->input('tenChucVu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Chucvu'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'Nhanviens', 'action' => 'index')); ?> </li>
	</ul>
</div>
 -->