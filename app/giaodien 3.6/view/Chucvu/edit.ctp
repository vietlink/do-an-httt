
 <div class="row title">
	<h2>Chỉnh Sửa "<?php echo $this->data['Chucvu']['tenChucVu']; ?>"</h2>
</div>

<div class="row index form">
	<form class="form-horizontal" method='post' role="form">
		<div class="field_text">
			<input name="data[Chucvu][tenChucVu]" maxlength="50" type="text" value="<?php echo ($this->data['Chucvu']['tenChucVu']);?>" id="ChucvuTenChucVu" required="required">

			<input type="hidden" name="data[Chucvu][id]" value="<?php echo ($this->data['Chucvu']['id']);?>" id="ChucvuId">
		    <button href="#" type="submit" class="button">Cập nhật</button>
		</div>
	</form>
</div>

<!-- 


<div class="chucvuses form">
<?php echo $this->Form->create('Chucvu'); ?>
	<fieldset>
		<legend><?php echo __('Edit Chucvu'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tenChucVu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Chucvu.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Chucvu.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller' => 'Nhanviens', 'action' => 'index')); ?> </li>
	</ul>
</div> -->
