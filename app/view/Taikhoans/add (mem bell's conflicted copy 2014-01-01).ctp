<script>
UPLOADCARE_PUBLIC_KEY = '4ebec9bf3a22ee1d5857';
</script>
<div class="row title">
	<h2>Khởi tạo tài khoản</h2>
</div>
<div class="row index add">
<form action="/da/Taikhoans/add" id="TaikhoanAddForm" class="form-horizontal" method='post' role="form" accept-charset="utf-8">
 		<div class="form-group">
		    <label class="col-sm-2 control-label">Tên</label>
		    <div class="col-sm-10">
		      <input name="data[Taikhoan][username]" placeholder="Tên Tài Khoản" required="required" maxlength="30" type="text" id="TaikhoanUsername">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Mật Khẩu</label>
			<div class="col-sm-10">
		      <input name="data[Taikhoan][password]" placeholder="Tên Team" required="required" maxlength="50" type="password" id="TaikhoanPassword">
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Quản Lý</label>
		    <div class="col-sm-10">
		      <?php echo $this->Form->select('Taikhoan.group_id',array('1' => 'Admin','2' => 'Leader', '3' => 'subLeader','4'=> 'Oldemployees' ,'5' => 'User'), array('style'=>'float: left;', 'name'=>'data[Taikhoan][group_id]')); ?>
		    </div>
	  	</div>
         <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Khởi tạo</button>
	    </div>
	</div>
	</form>
</div>