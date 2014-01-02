
<script>
/* code cho slide tự động chạy*/
 $(document).ready(function() {
         $('.carousel').carousel({
             interval: 10000
         })
    }); 
</script>

<!-- Hiện thị slide tự chạy ở trang tích cơm -->
		<div class="widget-container widget_gallery boxed" style="width: 100%;">
		    <div class="inner">

		        <div id="myCarousel2" class="carousel slide" data-interval="10000">
		            <!-- Carousel items -->
		            <div class="carousel-inner id1">
		                <div class="item active">
		                    <?php echo $this->Html->image('thucan/1.jpg', array('alt' => '', 'style'=>'width: 100%; margin-top: -56px')); ?>
		                    <div class="carousel-desc"><span>Chúc cả nhà ngon miệng</span></div>
		                </div>
		                 <div class="item">
		                    <?php echo $this->Html->image('thucan/2.jpg', array('alt' => '')); ?>
		                    <div class="carousel-desc"><span>Chúc cả nhà ngon miệng</span></div>
		                </div>
		                <div class="item">
		                    <?php echo $this->Html->image('thucan/3.jpg', array('alt' => '')); ?>
		                    <div class="carousel-desc"><span>Chúc cả nhà ngon miệng</span></div>
		                </div>
		                 <div class="item">
		                    <?php echo $this->Html->image('thucan/4.jpg', array('alt' => '')); ?>
		                    <div class="carousel-desc"><span>Chúc cả nhà ngon miệng</span></div>
		                </div>
		            </div>
		            <!-- Carousel indicators -->
		            <ol class="carousel-indicators">
		                <li data-target="#myCarousel2" data-slide-to="0" class="active first"></li>
		                <li data-target="#myCarousel2" data-slide-to="1"></li>
		                <li data-target="#myCarousel2" data-slide-to="2"></li>
		                <li data-target="#myCarousel2" data-slide-to="3" class="last"></li>
		            </ol>
		            <!-- Carousel nav -->
		            <a class="carousel-control left" href="#myCarousel2" data-slide="prev" hidefocus="true" style="outline: none;"></a>
		            <a class="carousel-control right" href="#myCarousel2" data-slide="next" hidefocus="true" style="outline: none;"></a>
		        </div>
		    </div>
		</div>

		<div class="row noiquy">

			<div class="col-md-6 noiquy">
				<h2><?php echo $this->Html->image('iconPhang/notice.png', array('alt' => 'nội quy', 'style'=>'width:25px; margin-right: 8px')); ?>Nội quy đăng kí cơm</h2>
				<p>Để nâng cao tính tự giác và sự chuyên nghiệp của các thành viên trong công ty đề nghị các nhân viên thực hiện nội quy " Tích cơm ":</p>
				<ul>
					<li>Thời gian đăng ký cơm : Trước 17h của ngày đăng ký. sau thời gian này đề nghị các bạn tôn trọng không yêu cầu đăng ký cơm ! Các bạn có thể đăng ký cơm cho ngày hôm sau ngay từ hôm nay. </li>
					</br>
					<li>Hình thức đăng ký : Qua trang tích cơm và qua gọi điện trực tiếp.</li>
				</ul>
			</div>
  			<div class="col-md-6">
  			<form action="/da/nhanviens/Dangkicom" method='post'>
				<label>Từ</label>
				<input type="date" min="<?php echo $da?>" min="2013-12-9" name="data[Dangkicom][ngay]" id="Dangkicomngay"><br>
				<label>Đến</label>
				<input type="date" min="<?php echo $da?>" name="data[Dangkicom][denngay]" id="Dangkicomdenngay"><br>
				<input type="number" value="<?php echo $user_id;?>" name="data[Dangkicom][nhanvien_id]" hidden="" id="Dangkicomnhanvien_id">
				<input type="submit" class="button" value="Đăng ký">
			</form>
			<a href="#" class="button"><span>Đăng kí</span></a>
  				<div class="table-responsive">
  				<?php if( $dangky!=null ): ?>
					<table class="table table-striped">
						<thead>
							<tr>
									<th>STT</th>
									<th>Ngày</th>
									<th>Số lượng</th>
									<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($dangky as $key => $value):?>
								<tr>
									<td><?php echo $key+1; ?></td>
									<td><?php echo h($value['Dangkicom']['ngay']); ?>&nbsp;</td>
									<td><?php echo h($value['soluong']); ?>&nbsp;</td>
									<td><?php echo $this->Form->postLink(__('Hủy'), array('controller'=>'nhanviens','action' => 'huycom', $value['Dangkicom']['id']), null, __('Are you sure you want to delete # %s?', $value['Dangkicom']['ngay'])); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				<?php endif; ?>
				<!--
	  				<table class="table table-striped">
					  <thead>
					  	<tr>
					  		<th>STT</th>
					  		<th>Ngày</th>
					  		<th>Trạng Thái</th>
					  		<th>Số lượng đã đặt cơm</th>
					  		<th>Đặt cơm</th>
					  	</tr>
					  </thead>
					  <tbody>
					  	<tr>
					  		<td>1</td>
					  		<td>Thứ 2</td>
					  		<td>đã đặt</td>
					  		<td>123</td>
					  		<td>  <div class="input_styled checklist">  <div class="rowCheckbox checkbox-large">
						        <input name="4" type="checkbox" id="4" value="4">
						        <label for="4"></label></div></div>
	    					</td>





					  	</tr>
					  	<tr>
					  		<td>2</td>
					  		<td>Thứ 3</td>
					  		<td>đã đặt</td>
					  		<td>123</td>
					  		<td>  <div class="input_styled checklist">  <div class="rowCheckbox checkbox-large">
						        <input name="5" type="checkbox" id="5" value="5">
						        <label for="5"></label></div></div>
	    					</td>
					  	</tr>
					  </tbody>
					</table>
				</div>
				<a href="#" class="button"><span>Đăng kí</span></a>-->
  			</div>
		</div>





<!-- <form action="/da/nhanviens/Dangkicom" method='post'>
	<label>Từ</label>
	<input type="date" min="<?php echo $da;?>" name="data[Dangkicom][ngay]" id="Dangkicomngay">
	<label>Đến</label>
	<input type="date" min="<?php echo $da;?>" name="data[Dangkicom][denngay]" id="Dangkicomdenngay">
	<input type="number" value="<?php echo $user_id;?>" name="data[Dangkicom][nhanvien_id]" hidden="" id="Dangkicomnhanvien_id">
	<input type="submit" value="Đăng ký">
</form>
<?php if( $dangky!=null ): ?>
<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Ngày</th>
			<th>Action</th>
	</tr>
	<?php foreach ($dangky as $key => $value):?>
	<tr>
			<td><?php echo h($value['Dangkicom']['ngay']); ?>&nbsp;</td>
			<td><?php echo $this->Form->postLink(__('Hủy'), array('controller'=>'nhanviens','action' => 'huycom', $value['Dangkicom']['id']), null, __('Are you sure you want to delete # %s?', $value['Dangkicom']['ngay'])); ?></td>
	</tr>
	<?php endforeach; ?>
</table>
<?php endif; ?> -->