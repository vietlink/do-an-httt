<div class="row title">
	<h2>Chi Tiết Dự Án</h2>
           <?php if($current_user['group_id'] == '3' || $current_user['group_id'] == '2'): ?>
	<div class="col-md-2"><?php echo $this->Html->link(__('Chỉnh Sửa'), array('action' => 'edit',$duan['id']),array('class' => 'button')); ?></div>
        <?php endif; ?>
</div> 

<div class="row main infoPersonal">
	<div class="col-md-6">
		<p>Thông Tin về Dự Án</p>
		<table class="table table-bordered">
			<tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
					font-weight: bold;color: #fff;">THÔNG TIN CƠ BẢN</p></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Dự Án</td>
			    <td><?php echo h($duan['tenDuAn']); ?></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Công Ty</td>
			    <td><?php echo h($duan['cty']); ?></td>
			</tr>
			<tr>
			    <td class="pTable">Ngày Bắt Đầu</td>
			    <td><?php echo h($duan['ngayBatDau']); ?></td>
			</tr>
			<?php if ($duan['ngayKetThuc'] != null ):?>
			<tr>
			    <td class="pTable">Ngày Kết Thúc</td>
			    <td><?php echo h($duan['ngayKetThuc']); ?></td>
			</tr>	
			<?php else: ?>
			<tr>
			    <td class="pTable">Dự Kiến Ngày Kết Thúc</td>
			    <td><?php echo h($duan['dkngayKetThuc']); ?></td>
			</tr>	
			<?php endif; ?>
			<tr>
			    <td class="pTable">Người Quản Lý</td>
			    <td><?php echo $this->Html->link(
			    	$this->Html->tag('span', $quanly['tenNhanVien'], array('data-title' => $quanly['tenNhanVien'])),
					array('controller' => 'Nhanviens', 'action' => 'view', $quanly['id']),
					array('escape'=>false,'class'=>'external roll-link')); ?></td>
			</tr>														
		</table>
	</div>

	<div class="col-md-6">
		<p>Các Thành Viên Đội Dự Án</p>
		<table class="table table-bordered">
			<thead>
	            <tr>
	              <th>#</th>
	              <th>Tên Thành Viên</th>
                      <?php if($current_user['group_id'] == '3' || $current_user['group_id'] == '2'): ?>
	              <th>Hành Động</th>
                      <?php endif; ?>
	            </tr>
		    </thead>
		   <?php if (!empty($nhanvien)): ?>
		    <tbody>
		    	<?php
					$i = 1;
					foreach ($nhanvien as $taikhoan): ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $this->Html->link(
					    	$this->Html->tag('span', $taikhoan['tenNhanVien'], array('data-title' => $taikhoan['tenNhanVien'])),
							array('controller' => 'Nhanviens', 'action' => 'view', $taikhoan['id']),
							array('escape'=>false,'class'=>'external roll-link')); ?></td>
                                                <?php if($current_user['group_id'] == '3' || $current_user['group_id'] == '2'): ?>
						<td class="actions">
							<?php echo $this->Html->link(
			                    $this->Html->tag('i', '', array('class' => 'fa fa-trash-o')),
			                    array('controller' => 'Duans', 'action' => 'deleteuser', $taikhoan['id'],$duan['id']),  array('escapeTitle' => false), __('Bạn có muốn xóa thành viên "%s" ra khỏi dự án này?', $taikhoan['tenNhanVien'])
			                ); ?>
						</td>
                                                <?php endif; ?>
					</tr>
				<?php endforeach; ?>
		    </tbody>
		    <?php endif; ?>
		</table>		
	</div>

</div>

<!-- <div class="related">
<?php if (!empty($nhanvien)): ?>
	<h3><?php echo __('Nhân viên'); ?></h3>
	
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Tên'); ?></th>
		
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($nhanvien as $taikhoan): ?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td><?php echo $this->Html->link(__($taikhoan['tenNhanVien']), array('controller' => 'Nhanviens', 'action' => 'view', $taikhoan['id']));?></td>
			
			<td class="actions">
<?php if($current_user['group_id'] == '3' || $current_user['group_id'] == '2'): ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'Duans', 'action' => 'deleteuser', $taikhoan['id'],$duan['id']), null, __('Are you sure you want to delete  %s?', $taikhoan['tenNhanVien'])); ?>
<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div> -->

</br>
</br>

<h4 style="border-bottom: 1px dotted ">Timeline</h4>
<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
			<tr>
				<td>Ngày</td>
				<td>Công việc</td>
				<td>Đánh Giá</td>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($listcv as $key=>$value): ?>
			<?php if (isset($value['DuansNhanvien'])): ?>
				<?php if($value['DuansNhanvien']['public']==0): ?>
					<?php if($value['DuansNhanvien']['vitri']==='Leader'): ?>
						<tr>
							<td><?php echo $value['DuansNhanvien']['created'] ?></td>
							<td><?php echo 'Bổ nhiệm '.$value['tenNhanVien'].' làm leader dự án';?></td>
							<td></td>
						</tr>
						<tr>
							<td><?php echo $value['DuansNhanvien']['modified'] ?></td>
							<td><?php echo $value['tenNhanVien'].' Rút khỏi vị trí leader';?></td>
							<td></td>
						</tr>
					<?php else: ?>
						<tr>
							<td><?php echo $value['DuansNhanvien']['created'] ?></td>
							<td><?php echo $value['tenNhanVien'].' Mới được thêm vào dự án';?></td>
							<td></td>
						</tr>
						<tr>
							<td><?php echo $value['DuansNhanvien']['modified'] ?></td>
							<td><?php echo $value['tenNhanVien'].' rút khỏi dự án';?></td>
							<td></td>
						</tr>
					<?php endif; ?>
				<?php else: ?>
					<?php if($value['DuansNhanvien']['vitri']==='Leader'): ?>
						<tr>
							<td><?php echo $value['DuansNhanvien']['created'] ?></td>
							<td><?php echo 'Bổ nhiệm '.$value['tenNhanVien'].' làm leader dự án';?></td>
							<td></td>
						</tr>
					<?php else: ?>
						<tr>
							<td><?php echo $value['DuansNhanvien']['created'] ?></td>
							<td><?php echo $value['tenNhanVien'].' Mới được thêm vào dự án';?></td>
							<td></td>
						</tr>
					<?php endif; ?>
				<?php endif; ?>
			<?php else: ?>
				<tr>
					<td><?php echo $value['Kbcongviec']['ngay'] ?></td>
					<td><?php echo $value['Kbcongviec']['congviec'];?></td>
					<td><?php echo $value['Kbcongviec']['cham'];?></td>
				</tr>
			<?php endif; ?>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>




