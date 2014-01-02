<style type="text/css">
	.thanhvien-thamgia {
		margin-top: 30px;
		padding-top: 30px;
		border-top: 2px dotted #e86741;
	}
	.thanhvien-thamgia .dataTables_wrapper .dataTables_length select{
		height: 21px;
		width: 28%;
		margin-top: -3px;
	}

	.thanhvien-thamgia .dataTables_wrapper .dataTables_filter input{
		height: 27px;
		width: 50%;
	}
</style>

<div class="row title">
	<h2>Khởi Tạo Dự Án</h2>
</div>

<div class="row index add">
 	<form class="form-horizontal" method='post' role="form">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Dự Án</label>
	    <div class="col-sm-10">
	      <input name="data[Duan][tenDuAn]" maxlength="100" type="text" id="DuanTenDuAn" required="required" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Công ty</label>
	    <div class="col-sm-10">
	      <input name="data[Duan][cty]" maxlength="255" type="text" id="DuanCty" required="required" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Mô Tả</label>
	    <div class="col-sm-10">
	      <textarea name="data[Duan][moTa]" cols="30" rows="6" id="DuanMoTa" required></textarea>
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Ngày Bắt Đầu</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Duan][ngayBatDau]"  class="form-control" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Dự kiến ngày kết thúc</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Duan][dkngayKetThuc]" class="form-control" id="DuanDkngayKetThuc" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Leader</label>
	    <div class="col-sm-10">
	       <?php echo $this->Form->select('Duan.id_subLeader',$listleader, array('style'=>'float: left;', 'name'=>'data[Duan][id_subLeader]')); ?>
	    </div>
	  </div>

	  <div class="form-group thanhvien-thamgia">
	    <label  class="col-sm-2 control-label">Nhân Viên Tham Gia</label>
	    <div class="col-sm-10">
	      <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
                                            <th>
						Tên
						</th>
						<th>
						chọn
						</th>
						
                          
					</tr>
				</thead>
				<tbody>
				<!--
				<th>
			<?php echo $this->Form->input('nhanvien_id',array('multiple'=>'checkbox','options'=>$listnhanviens,'selected' => $select)); ?>
                        
			</th>-->
			<?php foreach ($listnhanviens as $key => $value):?>
				<tr>
                                 <td><?php echo $value; ?></td>
				<td><?php echo $this->Form->checkbox('kq.'.$key,array('value'=>1)) ?></td>
                               
				
				</tr>
			<?php endforeach; ?>
			
			</tbody>
			</table>
	    </div>
	  </div>
    <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Khởi tạo</button>
	    </div>
	</div>

  </form>
</div>


