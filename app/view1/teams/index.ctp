<div class="Team view">
	<ul>
	    <?php foreach($data as $id=>$name): ?>
	        <li>
	            <?php echo $this->html->link($name,array('action'=>'view',$id)); ?>
	            <?php echo $this->html->link('edit',array('action'=>'edit',$id)); ?>
	            <?php echo $this->html->link('[x]',array('action'=>'delete',$id)); ?>
	        </li>
	    <?php endforeach;?>
	</ul>
</div>

 <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add Team'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('controller'=>'Nhanviens','action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group'), array('controller' => 'Groups', 'action' => 'index')); ?> </li>
	</ul>
</div>