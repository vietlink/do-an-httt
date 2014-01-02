<div class="listduandalam">
<table>
    <tr>
        <td>Tên Project</td>
        <td>Công ty</td>
        <td>Ngày bắt đầu</td>
        <td>Ngày kết thúc</td>
        <td></td>
    </tr>
	
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
		<td><?php echo $this->Html->link('Kết thúc', array('action'=>'ketthucduan', $duan['duan']['id']));?></td>
		</tr>
	<?php endif; ?>
	<?php endforeach; ?>
	</table>
</div>