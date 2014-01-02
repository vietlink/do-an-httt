<div class="row title">
    <h2>VIẾT BÀI</h2>
</div>
<div class="hoatdongs form">
<?php echo $this->Form->create('Hoatdong'); ?>
	<fieldset>
		<legend><?php echo __('Add Hoatdong'); ?></legend>
	<?php
		echo $this->Form->input('tenHoatDong');
		echo $this->Form->input('mota',array('type' => 'textarea','class'=>'ckeditor'));
		echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor'));
		echo $this->Form->input('noiDung', array('class'=>'ckeditor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hoatdongs'), array('action' => 'index')); ?></li>
	</ul>
</div>
