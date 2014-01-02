<div class="row title">
    <h2>SỬA BÀI</h2>
</div>
<div class="hoatdongs form">
<?php echo $this->Form->create('Hoatdong'); ?>
	<fieldset>
		<legend><?php echo __('Edit Hoatdong'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tenHoatDong');
		echo $this->Form->input('mota',array('type' => 'textarea','class'=>'ckeditor'));
		echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor'));
		echo $this->Form->input('noiDung', array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Đăng')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Hoatdong.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Hoatdong.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Hoatdongs'), array('action' => 'index')); ?></li>
	</ul>
</div>
