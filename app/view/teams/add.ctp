<div class="row title">
	<h2>Khởi Tạo Nhóm</h2>
</div>


<div class="row index add">
 	<form action="/da/teams/add" class="form-horizontal" method='post' role="form" accept-charset="utf-8">
 		<div class="form-group">
		    <label class="col-sm-2 control-label">Tên Nhóm</label>
		    <div class="col-sm-10">
		      <input name="data[Team][name]" placeholder="Tên Team" required="required" maxlength="50" type="text" id="TeamName">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Mục</label>
		    <div class="col-sm-10">
		      <?php echo $this->Form->select('Team.parent_id',$data, array('style'=>'float: left;', 'name'=>'data[Team][parent_id]')); ?>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Quản Lý</label>
		    <div class="col-sm-10">
		      <?php echo $this->Form->select('Team.quanly_id',$listnhanviens, array('style'=>'float: left;', 'name'=>'data[Team][quanly_id]')); ?>
		    </div>
	  	</div>
	  	<div class="form-group thanhvien-thamgia">
		    <label  class="col-sm-2 control-label">Nhân Viên</label>
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