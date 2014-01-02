<div class="row title">
	<h2>Chỉnh Sửa Sự Kiện</h2>
</div>

<div class="row index add">
 	<form class="form-horizontal" method='post' role="form">
 	<input type="hidden" name="data[Hoatdong][id]" value="<?php echo $this->data['Hoatdong']['id'];?>" id="HoatdongId">
	  <div class="form-group">
	    <label class="col-sm-2 control-label">Tên Hoạt Động</label>
	    <div class="col-sm-10">
	      <input name="data[Hoatdong][tenHoatDong]" maxlength="100" type="text" value="<?php echo $this->data['Hoatdong']['tenHoatDong'];?>" id="HoatdongTenHoatDong" required="required">
	    </div>
	  </div>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Mô Tả</label>
	    <div class="col-sm-10">
			<textarea name="data[Hoatdong][mota]" class="ckeditor" cols="30" rows="6" id="HoatdongMota"><?php echo $this->data['Hoatdong']['mota'];?></textarea> 
	    </div>
	  </div>
	  <?php echo $this->Html->script('ckeditor/ckeditor', array('required' => false, 'class' => 'ckeditor')); ?>
	   <div class="form-group">
	    <label class="col-sm-2 control-label">Nội Dung</label>
	    <div class="col-sm-10">
	     <textarea name="data[Hoatdong][noiDung]" class="ckeditor" cols="30" rows="6" id="HoatdongNoiDung" style="visibility: hidden; display: none;"><?php echo $this->data['Hoatdong']['noiDung']; ?></textarea>
	    </div>
	  </div>
    <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="button">Sửa xong</button>
	    </div>
	</div>

  </form>
</div>






