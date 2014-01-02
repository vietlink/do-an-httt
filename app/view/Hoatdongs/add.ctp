<div class="row title">
	<h2>Khởi tạo sự kiện</h2>
</div>

<div class="row index add">
 	<form class="form-horizontal" method='post' role="form">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Hoạt Động</label>
	    <div class="col-sm-10">
			<input name="data[Hoatdong][tenHoatDong]" maxlength="100" type="text" id="HoatdongTenHoatDong" required="required">
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Mô Tả</label>
	    <div class="col-sm-10">
			<textarea name="data[Hoatdong][mota]" class="ckeditor"  cols="30" rows="6" id="HoatdongMota"></textarea>
	    </div>
	  </div>
	  <?php echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor')); ?>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Nội Dung</label>
	    <div class="col-sm-10">
	     <textarea name="data[Hoatdong][noiDung]" class="ckeditor" cols="30" rows="6" id="HoatdongNoiDung" style="visibility: hidden; display: none;"></textarea>
	    </div>
	  </div>
    <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Thêm</button>
	    </div>
	</div>

  </form>
</div>



