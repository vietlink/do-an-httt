<div class="row title">
	<h2>Chỉnh Sửa Dự Án</h2>
</div>

<div class="row index add">
 	<form class="form-horizontal" method='post' role="form">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Dự Án</label>
	    <div class="col-sm-10">
	      <input name="data[Duan][tenDuAn]" maxlength="100" type="text" id="DuanTenDuAn" value="<?php echo $this->data['duan']['tenDuAn'];?>" required="required" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Công ty</label>
	    <div class="col-sm-10">
	      <input name="data[Duan][cty]" maxlength="255" type="text" id="DuanCty" value="<?php echo $this->data['duan']['cty'];?>" required="required" >
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Mô Tả</label>
	    <div class="col-sm-10">
	      <textarea name="data[Duan][moTa]" cols="30" rows="6" id="DuanMoTa" required><?php echo $this->data['duan']['moTa'];?></textarea>
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Ngày Bắt Đầu</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Duan][ngayBatDau]" value="<?php echo $this->data['duan']['ngayBatDau'];?>" class="form-control" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Đ.K Ngày Kết Thúc</label>
	    <div class="col-sm-10">
	      <input type="date" name="data[Duan][dkngayKetThuc]" value="<?php echo $this->data['duan']['dkngayKetThuc'];?>" class="form-control" required>
	    </div>
	  </div>
	  <div class="form-group">
	    <label  class="col-sm-2 control-label">Leader</label>
	    <div class="col-sm-10">
	       <?php echo $this->Form->select('Duan.id_subLeader',$listleader, array('style'=>'float: left;', 'name'=>'data[Duan][id_subLeader]', 'value'=> $this->data['duan']['id_subLeader'] )); ?>
	    </div>
	  </div>

	  <div class="form-group thanhvien-thamgia">
	    <label  class="col-sm-2 control-label">Thành Viên Tham Gia</label>
	    <div class="col-sm-10">
	      <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
				<thead>
					<tr>
						<th>
						chọn
						</th>
						<th>
						Tên
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
				<td><?php echo $this->Form->checkbox('kq.'.$key,array('value'=>1,'class'=>'chonnv')) ?></td>
				<td><?php echo $value; ?></td>
				</tr>
			<?php endforeach; ?>
			
			</tbody>
			</table>
	    </div>
	  </div>
    <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Sửa xong</button>
	    </div>
	</div>

  </form>
</div>










