<div class="row title">
    <h2>Danh Sách Chấm Công</h2>
</div>

<style>
	table strong {
		color: rgb(80, 180, 24);
	}
</style>

<div class="row index">
    <table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
    	<thead>
		    <tr>
		        <th>Tên Project</th>
		        <th>Công ty</th>
		        <th>Ngày bắt đầu</th>
		        <th>Ngày kết thúc</th>
		    </tr>
        </thead>
		<tbody>
			<?php foreach ($duans as $duan) :?>
				<?php if($duan['duan']['ngayKetThuc'] != null):?>
				<tr>
				<td><?php echo $this->Html->link($duan['duan']['tenDuAn'], array('action'=>'chamcong', $duan['duan']['id']));?></td>
				<td><?php echo $duan['duan']['cty']; ?></td>
				<td><?php echo $duan['duan']['ngayBatDau']; ?></td>
				<td><?php echo $duan['duan']['ngayKetThuc']; ?></td>
				</tr>
			<?php else: ?>
				<tr>
				<td><?php echo $this->Html->link($duan['duan']['tenDuAn'], array('action'=>'chamcong', $duan['duan']['id']));?></td>
				<td><?php echo $duan['duan']['cty']; ?></td>
				<td><?php echo $duan['duan']['ngayBatDau']; ?></td>
				<td><strong>Đang chạy</strong></td>
				</tr>
			<?php endif; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>