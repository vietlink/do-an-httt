<div class="row title">
	<h2>Chỉnh Sửa Team</h2>
</div>

<div class="row index add">
 	<form class="form-horizontal" method='post' role="form">
	 	<div class="form-group">
		    <label class="col-sm-2 control-label">Tên Nhóm</label>
		    <div class="col-sm-10">
		       <input name="data[Team][name]" maxlength="50" type="text" id="TeamName" value="<?php echo $this->data['Team']['name'];?>" required="required" >
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Mục</label>
		    <div class="col-sm-10">
		      <?php echo $this->Form->select('Team.parent_id',$data, array('style'=>'float: left;', 'name'=>'data[Team][parent_id]', 'value'=> $this->data['Team']['parent_id'] )); ?>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Quản Lý</label>
		    <div class="col-sm-10">
		       <?php echo $this->Form->select('Team.quanly_id',$listnhanviens, array('style'=>'float: left;', 'name'=>'data[Team][quanly_id]', 'value'=> $this->data['Team']['quanly_id'] )); ?>
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


