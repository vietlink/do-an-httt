<div class="row title">
	<h2>Khai Báo Công Việc</h2>
</div>

<div class="row index add">
	<form class="form-horizontal" action="/da/duans/khaibao" id="DuanKhaibaoForm" method="post" accept-charset="utf-8" role="form">
		<input name="data[Kbcongviec][id_nhanvien]" type="number" value="<?php echo $user_id; ?>" hidden="" />
		<div class="form-group">
		    <label class="col-sm-2 control-label">Ngày</label>
		    <div class="col-sm-10">
		   	  <input type="date" name="data[Kbcongviec][ngay]" class="form-control"  id="KhaibaocongviecNgay" required="">
		    </div>
	  	</div>
		<div class="form-group">
		    <label class="col-sm-2 control-label">Công việc</label>
		    <div class="col-sm-10">
		      <input name="data[Kbcongviec][congviec]" maxlength="200" type="text" id="KhaibaocongviecCongviec" />
		    </div>
	  	</div>
		<div class="form-group">
		    <label class="col-sm-2 control-label">Mô tả</label>
		    <div class="col-sm-10">
		     	<input name="data[Kbcongviec][mota]" maxlength="200" type="text" id="KhaibaocongviecMota" />
		    </div>
	  	</div>	  
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Dự Án</label>
		    <div class="col-sm-10">
		     	<select name="data[Kbcongviec][id_duan]" >
					<option></option>
						<?php foreach ($listduan as $key => $duan) {
							echo '<option value="'.$key.'">'.$duan.'</option>';
						} ?>
				</select>
		    </div>
	  	</div>
	  	<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="button">Hoàn Thành</button>
	    </div>
	</div>	
	</form>
</div>


<!-- <form action="/da/duans/khaibao" id="DuanKhaibaoForm" method="post" accept-charset="utf-8">

	<div class="input date">
		<label for="Ngay">Ngày</label>
		<input name="data[Kbcongviec][ngay]" maxlength="200" type="date" id="KhaibaocongviecNgay" />
	</div>
	<div class="input text">
		<label for="congviec">Công việc</label>
		<input name="data[Kbcongviec][congviec]" maxlength="200" type="text" id="KhaibaocongviecCongviec" />
	</div>
	<div class="input text">
		<label for="mota">Mô tả</label>
		<input name="data[Kbcongviec][mota]" maxlength="200" type="text" id="KhaibaocongviecMota" />
	</div>
	<div class="input slect">
		<label for="id_duan">Dự án</label>
		<select name="data[Kbcongviec][id_duan]" >
		<option></option>
			<?php foreach ($listduan as $key => $duan) {
				echo '<option value="'.$key.'">'.$duan.'</option>';
			} ?>
		</select>
	</div>
	<div class="submit">
		<input type="submit" value="Save">
	</div>
</form> -->