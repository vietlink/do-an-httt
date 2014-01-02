<style type="text/css">
	table.table td.pTable {
		font-weight: bold;
	}

</style>
<div class="row title">
	<h2>Chi Tiết</h2>
	<div class="col-md-2"><?php echo $this->Html->link(__('Chỉnh Sửa'), array('action' => 'edit', $chucvus['Chucvu']['id']),array('class' => 'button')); ?></div>
</div> 



<div class="row main infoPersonal"> 
	<table class="table table-bordered" style="margin:0 auto; width: 50%;">
			<tr><td colspan="2" style="background: #333"><p style="margin-bottom: 0px;
					font-weight: bold;color: #fff;">THÔNG TIN VỀ CHỨC VỤ</p></td>
			</tr>
			<tr>
			    <td class="pTable">Id</td>
			    <td><?php echo h($chucvus['Chucvu']['id']); ?></td>
			</tr>
			<tr>
			    <td class="pTable">Tên Chức Vụ</td>
			    <td><?php echo h($chucvus['Chucvu']['tenChucVu']); ?></td>
			</tr>														
		</table>
</div>