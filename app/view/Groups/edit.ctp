<div class="row title">
	<h2>Chỉnh Sửa</h2>
</div>

<div class="row index form">
	<form class="form-horizontal" method='post' role="form">
		<div class="field_text">
			<input name="data[Group][name]" maxlength="100" type="text" value="<?php echo $this->data['Group']['name']; ?>" id="GroupName" required="required">
		    <input type="hidden" name="data[Group][id]" value="<?php echo $this->data['Group']['id']; ?>" id="GroupId">
		    <button href="#" type="submit" class="button">Cập nhật</button>
		</div>
	</form>
</div>

<!--  <div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>  -->

<!-- 
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->