<div class="row title">
    <h2>Chấm Công Dự Án : "<?php echo $duan['tenDuAn'] ?>"</h2>
</div>

<style>
	td.chamTot {
		font-weight: bold;
		color: green;
	}
	td.chamDat {
		color: red;
		font-weight: bold;
	}
	td.chamCham {
		color: #333;
		font-weight: bold;
	}
</style>



<div class="row main infoPersonal">
	<?php if($liscvs!= null): ?>
	<div class="col-md-4">
	<?php else: ?>
		<div class="col-md-6">
	<?php endif; ?>
		<p>Thông Tin về Dự Án</p>
		<table class="table table-bordered">
			<tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
					font-weight: bold;color: #fff;">THÔNG TIN CƠ BẢN</p></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Dự Án</td>
			    <td><?php echo $duan['tenDuAn'] ?></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Công Ty</td>
			    <td><?php echo $duan['cty'] ?></td>
			</tr>
			<tr>
			    <td class="pTable">Ngày Bắt Đầu</td>
			    <td><?php echo $duan['ngayBatDau'] ?></td>
			</tr>
			<?php if ($duan['ngayKetThuc'] != null ):?>
			<tr>
			    <td class="pTable">Ngày Kết Thúc</td>
			    <td><?php echo $duan['ngayKetThuc']; ?></td>
			</tr>	
			<?php else: ?>
			<tr>
			    <td class="pTable">Dự Kiến Ngày Kết Thúc</td>
			    <td><?php echo $duan['dkngayKetThuc'] ?></td>
			</tr>	
			<?php endif; ?>											
		</table>
	</div>
	<?php if($liscvs!= null): ?>
	<div class="col-md-8">
	<?php else: ?>
		<div class="col-md-6">
	<?php endif; ?>

		<p>Báo Cáo Công Việc</p>
		<!--Nhung khai bao cong viec ma chua cham -->
		<?php if($liscvs!= null): ?>
			<table cellpadding="0" cellspacing="0" border="0" class="table">
				<thead>
				    <tr>
				        <th>STT</th>
				        <th>Nhân viên</th>
				        <th>Công việc</th>
				        <th>Ngày</th>
				        <th>Tốt</th>
				        <th>Đạt</th>
				        <th>Chậm</th>
				        
				    </tr>
				</thead>
				</tbody>
			    <form action="/da/duans/chamcong/<?php echo $id ?>" id="DuanChamcongForm" method="post" accept-charset="utf-8">
			<?php foreach ($nhanviens as $key=>$value): ?>
				<?php if($liscvs[$key]!=null): ?>
				<tr>
					<td><?php echo $key +1 ?></td>
					<td><?php echo $value['tenNhanVien'];?></td>
					<?php foreach ($liscvs[$key] as $cv): ?>
						<td><?php echo $cv['Kbcongviec']['ngay']; ?></td> 
						<td><?php echo $cv['Kbcongviec']['congviec']; ?></td> 
					<?php endforeach; ?>
					<td> <input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Tốt"></td>
					<td><input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Đạt"></td>
					<td><input type="radio" name="data[Kbcongviec][<?php echo $value['id']; ?>]" value="Chậm"></td>
				</tr>
				<?php endif; ?>
			<?php endforeach; ?>
			</tbody>
		</table>
			<button type="submit" class="button" style="margin: 0 auto;width: 19%;">Hoàn thành</button>
					</form>
		<?php else: ?>
		<div style="margin-top: 60px;">
		<?php echo $this->Html->image('iconPhang/blank.png'); ?>	
		<h2 style="font-size: 1em; color: rgba(235, 53, 53, 0.73);">Chưa có báo cáo nào mới</h2>
		</div>
		<?php endif; ?>	
	</div>




</div>


</BR>
</BR>


<!--List cong viec trong qua trinh cua tung thanh vien-->

<h4 style="border-bottom: 1px dotted;">Quá trình</h4>
<div class="row index">
	<table cellpadding="0" cellspacing="0" border="0" class="table display" id="example">
		<thead>
			<tr>
				<th>STT</th>
				<th>Nhân viên</th>
				<th>Ngày</th>
				<th>Công việc</th>
				<th>Đánh giá</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($nhanviens as $key=>$value): ?>
			<tr>
				<td><?php echo $key +1 ?></td>
				<td><?php echo $value['tenNhanVien'];?></td>

				<?php foreach ($listchams[$key] as $cv): ?>
					<td><?php echo $cv['Kbcongviec']['ngay']; ?></td>
					<td><?php echo $cv['Kbcongviec']['congviec']; ?></td>
					<?php if (!strcmp($cv['Kbcongviec']['cham'],'Tốt')) { ?>
						<td class="chamTot"><?php echo $cv['Kbcongviec']['cham']; ?></td>
					<?php } ?>
					<?php if (!strcmp($cv['Kbcongviec']['cham'],'Đạt')) { ?>
						<td class="chamDat"><?php echo $cv['Kbcongviec']['cham']; ?></td>	
					<?php } ?>		
					<?php if (!strcmp($cv['Kbcongviec']['cham'],'Chậm')) { ?>
						<td class="chamCham"><?php echo $cv['Kbcongviec']['cham']; ?></td>	
					<?php } ?>		
				<?php endforeach; ?>

			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>