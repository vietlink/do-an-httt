<div class="row title">
	<h2>Xin Nghỉ</h2>
</div>
 <div class="row index add">

	<form class="form-horizontal" action="/da/nhanviens/xinnghi" id="XinnghiXinnghiForm" method="post" accept-charset="utf-8" role="form">
		<input name="data[Xinnghi][nhanvien_id]" type="number" value="<?php echo $user_id; ?>" hidden="hidden" id="XinnghiNhanvienId">
		<div class="form-group">
		    <label class="col-sm-2 control-label">Lý Do Nghỉ</label>
		    <div class="col-sm-10">
		   	  <input name="data[Xinnghi][lydo]" maxlength="255" type="text" id="XinnghiLydo" required="required">
		    </div>
	  	</div>
		<div class="form-group">
		    <label class="col-sm-2 control-label">Công việc Hiện Tại</label>
		    <div class="col-sm-10">
		      <input name="data[Xinnghi][cvhientai]" maxlength="255" type="text" id="XinnghiCvhientai">
		    </div>
	  	</div>	  
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Người Làm Thay</label>
		    <div class="col-sm-10">
		     	<select name="data[Xinnghi][lamthay_id]" id="XinnghiLamthayId">
					<option></option>
						<?php foreach ($lamthays as $key => $ten) {
							echo '<option value="'.$key.'">'.$ten.'</option>';
						} ?>
				</select>
		    </div>
	  	</div>
	  	<
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Bắt Đầu</label>
		    <div class="col-sm-10">
		     		<input type="datetime-local" name="data[Xinnghi][batdau]" class="form-control" required="">
		     	
		    </div>
	  	</div>
	  	<div class="form-group">
		    <label class="col-sm-2 control-label">Kết Thúc</label>
		    <div class="col-sm-10">
		     		<input type="datetime-local" name="data[Xinnghi][ketthuc]" class="form-control" required="">
		     	
		    </div>
	  	</div>
	  	<div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="button">Hoàn Thành</button>
	    </div>
	</div>	
	</form>
</div> 




<!-- 

<?php echo $this->Form->create('Xinnghi'); ?>
	<fieldset>
		<legend><?php echo __('Xin nghỉ'); ?></legend>
		
	<?php
		echo $this->Form->number('nhanvien_id',array('type'=>'number','value'=>$user_id,'hidden'=>'hidden'));
		echo $this->Form->input('lydo',array('label'=>'Lý do nghỉ'));
		echo $this->Form->input('cvhientai',array('label'=>'Công việc hiện tại'));
		//echo $this->Form->select('lamthay_id',array('label'=>'Người làm thay'));
		echo $this->Form->label('Người làm thay').'<br>';
		echo $this->Form->select('lamthay_id',array($lamthays));
		echo $this->Form->input('batdau');
		echo $this->Form->input('ketthuc');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?> -->
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List Nhanviens'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Chucvu'), array('controller' => 'chucvu', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Chucvu'), array('controller' => 'chucvu', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Taikhoans'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Taikhoan'), array('controller' => 'taikhoans', 'action' => 'add')); ?> </li>
		
	</ul>
</div> -->