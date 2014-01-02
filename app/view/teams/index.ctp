<div class="row title">
	<h2>TEAMS</h2>
        <?php if($current_user['group_id'] == '1'): ?>
	<div class="col-md-2"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
        <?php endif; ?>
</div>



<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
          <tr>
			<th>Tên Nhóm</th>
                        <?php if($current_user['group_id'] == '1'): ?>
			<th>Chỉnh Sửa</th>
			<th>Xóa</th>
                        <?php endif; ?>
          </tr>
        </thead>
		 <tbody>
			 <?php foreach($data as $id=>$name): ?>
                     
	        <tr>
	            <td><?php echo $this->html->link($name,array('action'=>'view',$id)); ?></td>
                     <?php if($current_user['group_id'] == '1'): ?>
	            <td><?php 
				echo $this->Html->link(
				     $this->Html->tag('i', '', array('class' => 'fa fa-pencil-square-o')),
				    array('action' => 'edit', $id),
				    array('escapeTitle' => false)
				);
				?></td>
				<td><?php 
				echo $this->Html->link(
				     $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
				    array('action' => 'delete', $id),
				    array('escapeTitle' => false)
				);
				?></td>
                                <?php endif; ?>
	        </tr>
                
	    <?php endforeach;?>
		</tbody>
	</table>
</div>
