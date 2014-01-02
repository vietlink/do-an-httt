<style type="text/css">
	table.table td.pTable {
		font-weight: bold;
	}

</style>
<div class="row title">
	<h2>Chi Tiết Team</h2>
	<div class="col-md-2"><?php echo $this->Html->link(__('Chỉnh Sửa'), array('action' => 'edit', $team['id']),array('class' => 'button')); ?></div>
</div> 



<div class="row main infoPersonal"> 
	<table class="table table-bordered" style="margin:0 auto; width: 50%;">
			<tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
					font-weight: bold;color: #fff;">THÔNG TIN VỀ TEAM</p></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Team</td>
			    <td><?php echo h($team['name']); ?></td>
			</tr>
			<tr>
			    <td class="pTable">Người Quản Lý</td>
			    <td><?php echo $this->Html->link(
			    	$this->Html->tag('span', $quanly['tenNhanVien'], array('data-title' => $quanly['tenNhanVien'])),
					array('controller' => 'Nhanviens', 'action' => 'view', $quanly['id']),
					array('escape'=>false,'class'=>'external roll-link')); ?></td>
			</tr>														
		</table>
</div>



</br>
</br>

<h4 style="border-bottom: 1px dotted ">Thành viên trong team</h4>
<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
			<tr>
				<th>Tên</th>
				<th>Chuyên Ngành</th>
				<th>Năm Sinh</th>
				<th>Hành Động</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$i = 0;
		foreach ($nhanvien as $taikhoan): ?>
		<tr>
			<td><?php echo $this->Html->link(
			    	$this->Html->tag('span', $taikhoan['tenNhanVien'], array('data-title' => $taikhoan['tenNhanVien'])),
					array('controller' => 'Nhanviens', 'action' => 'view', $taikhoan['id']),
					array('escape'=>false,'class'=>'external roll-link')); ?></td>
			<td><?php echo $taikhoan['chuyenNganh']; ?></td>
			<td><?php echo $taikhoan['namSinh']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(
			                    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
			                    array('controller' => 'Teams', 'action' => 'deleteuser', $taikhoan['id'],$team['id']),  array('escapeTitle' => false), __('Bạn có muốn xóa thành viên "%s" ra khỏi nhóm này?', $taikhoan['tenNhanVien'])
			                ); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
</div>





