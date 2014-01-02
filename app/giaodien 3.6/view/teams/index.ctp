<div class="row title">
	<h2>TEAMS</h2>
	<div class="col-md-2"><?php echo $this->Html->link(__('Thêm Mới'), array('action' => 'add'),array('class' => 'button')); ?></div>
</div>



<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
          <tr>
			<th>Tên Nhóm</th>
			<th>Chỉnh Sửa</th>
			<th>Xóa</th>
          </tr>
        </thead>
		 <tbody>
			 <?php foreach($data as $id=>$name): ?>
	        <tr>
	            <td><?php echo $this->html->link($name,array('action'=>'view',$id)); ?></td>
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
	        </tr>
	    <?php endforeach;?>
		</tbody>
	</table>
</div>
