<?php echo $this->Html->script('membell'); ?>
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
			<?php echo h($hoatdong['Hoatdong']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NoiDung'); ?></dt>
		<dd>
			<?php echo $hoatdong['Hoatdong']['noiDung']; ?>
			&nbsp;
		</dd>
		
	</dl>
</div>


<form>
	<input type="number" id="idbaiviet" hidden=""  value="<?php echo $hoatdong['Hoatdong']['id']; ?>">
	<textarea  name="noidung" id="commenthoatdong" cols="10" rows="3"></textarea>
</form>

 
<div id="showcomment">
	<?php foreach($hoatdong['Comment'] as $comment): ?>
		<div>
			<?php echo $comment['nhanvien']['tenNhanVien']; ?><br>
			<?php echo $this->Html->image('ava/ '.$comment['nhanvien']['anh'], array('alt' => '', 'class'=>'img-circle')); ?><br>
			<?php echo $comment['noidung']; ?><br>
			<?php echo $comment['created']; ?><br>
		</div>
	<?php endforeach; ?> 
</div>



<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
            <?php if($current_user['group_id'] == '1'): ?>
		<li><?php echo $this->Html->link(__('Edit Hoatdong'), array('action' => 'edit', $hoatdong['Hoatdong']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hoatdong'), array('action' => 'delete', $hoatdong['Hoatdong']['id']), null, __('Are you sure you want to delete # %s?', $hoatdong['Hoatdong']['id'])); ?> </li>
                <li><?php echo $this->Html->link(__('New Hoatdong'), array('action' => 'add')); ?> </li>
		 <?php endif; ?>
                <li><?php echo $this->Html->link(__('List Hoatdongs'), array('action' => 'index')); ?> </li>
		
	</ul>
</div>
