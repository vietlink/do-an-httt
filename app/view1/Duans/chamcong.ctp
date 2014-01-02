<div>Dự án: <?php echo $duan['tenDuAn'] ?></div>
<div>Công ty: <?php echo $duan['cty'] ?></div>
<div>Ngày bắt đầu: <?php echo $duan['ngayBatDau'] ?></div>
<div>Dự kiến kết thúc: <?php echo $duan['dkngayKetThuc'] ?></div>
<?php if($duan['ngayKetThuc']!=null): ?>
	<div>Dự án đã kết thúc: <?php echo $duan['ngayKetThuc']; ?></div>
<?php endif; ?>	





<!--Nhung khai bao cong viec ma chua cham -->
<?php if($liscvs!= null): ?>
	<table>
	    <tr>
	        <td>STT</td>
	        <td>Nhân viên</td>
	        <td>Công việc</td>
	        <td>Nhận xét</td>
	        
	    </tr>
	    <form action="/da/duans/chamcong/<?php echo $id ?>" id="DuanChamcongForm" method="post" accept-charset="utf-8">
	<?php foreach ($nhanviens as $key=>$value): ?>
		<?php if($liscvs[$key]!=null): ?>
		<tr>
			<td><?php echo $key +1 ?></td>
			<td><?php echo $value['tenNhanVien'];?></td>
			<td>
			<ul>
			<?php foreach ($liscvs[$key] as $cv): ?>
				<li><?php echo $cv['Kbcongviec']['ngay'].$cv['Kbcongviec']['congviec'] ?></li>
			<?php endforeach; ?>
			</ul>
			</td>
			<td>
				
					<input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Tốt">Tốt<BR>
					<input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Đạt">Đạt<BR>
					<input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Chậm">Chậm<BR>
			</td>
		</tr>
		<?php endif; ?>
	<?php endforeach; ?>
	</table>
	<input type="Submit" value="save"/>
			</form>
<?php else: ?>
<h2>Chưa có báo cáo nào mới</h2>	
<?php endif; ?>








<!--List cong viec trong qua trinh cua tung thanh vien-->

			<h1>Quá trình</h1>
<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
			<tr>
				<td>STT</td>
				<td>Nhân viên</td>
				<td>Công việc</td>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($nhanviens as $key=>$value): ?>
			<tr>
				<td><?php echo $key +1 ?></td>
				<td><?php echo $value['tenNhanVien'];?></td>
				<td>
					<ul>
						<?php foreach ($listchams[$key] as $cv): ?>
							<li><?php echo '<im>'.$cv['Kbcongviec']['ngay'].'</im> '.$cv['Kbcongviec']['congviec'].' <strong>'.$cv['Kbcongviec']['cham'].'</strong>' ?></li>
						<?php endforeach; ?>
					</ul>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>