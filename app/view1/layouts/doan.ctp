<!DOCTYPE html>
<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"> <!--<![endif]-->
<!-- HEAD -->

<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"> 
	<!--<title>TRANG QUẢN LÝ</title>
	<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
	<!--[if gte IE 9]>
	<style type="text/css">
	    .gradient {filter: none !important;}
	</style>
	<![endif]-->
	
	<?php echo $this->Html->charset();?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	
	<?php
		echo $this->Html->meta('icon');
	?>
		<!-- MAIN JS LIBS -->
	<?php
		echo $this->Html->script(array('libs/modernizr.min.js','libs/jquery-1.10.0.js','libs/jquery-ui.min.js','libs/bootstrap.min.js'));
	?>
		<!-- Style css -->
	<?php
		echo $this->Html->css(array('bootstrap', 'style','styleedit', 'dataTable','font-awesome.min'));
	?>

	<!-- scripts -->
	<?php
		echo $this->Html->script(array('jquery.dataTables.nightly','membell','general','jquery.customInput','suly'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<style type="text/css">
		.message, .info, .success, .warning, .error {
    border: 1px solid;
    margin: 10px 0px;
    padding:15px 10px 15px 65px;
    background-repeat: no-repeat;
    background-position: 10px center;
    font-size: 125%;
}
.info {
    /* color: #00529B; */
    border-color: #00529B;
    background-color: #BDE5F8;
    background-image: url('../../img/message/info.png');
}
.success {
    /* color: #4F8A10; */
    border-color: #4F8A10;
    background-color: #DFF2BF;
    background-image:url('../../img/message/success.png');
}
.warning {
    /* color: #9F6000; */
    border-color: #9F6000;
    background-color: #FFFABF;
    background-image: url('../../img/message/warning.png');
}
.error {
    /* color: #D8000C; */
    border-color: #D8000C;
    background-color: #FFBABA;
    background-image: url('../../img/message/error.png');
}
	</style>
</head>

<!-- BODY -->

<body>
<?php if($user_inf!=null): ?>
<!-- box information -->
<div class="box-information">
	<div class="myInfo">
		<i class="icon-menu icon-menu5" style="margin-top: 7px;margin-left: 12px;"></i>
		<p>THÔNG TIN CÁ NHÂN</p>
		<i class="fa fa-plus" style="position: absolute;top: 8px;left: 276px;"></i>
	</div>
	<div class="mainInfo">
		<span class="info-group">BOM</span>
		<div class="inner-info">
			<h5><?php echo $user_inf['tenNhanVien'] ?></h5>
		    <div class="avatar" style="margin-bottom:16px;">
		    	<?php echo $this->Html->image('ava/ '.$user_inf['anh'], array('alt' => '', 'class'=>'img-circle')); ?>
    		</div>
    		<p style="margin-bottom: 0px"><?php echo $this->Html->image('iconPhang/1.png', array('style'=>'width: 15px;margin-right: 6px;')); ?><?php echo '0'.$user_inf['soDT']; ?></p>
    		<p style="font-size: 0.8em;"><?php echo $this->Html->image('iconPhang/2.png', array('style'=>'width: 20px;margin-right: 6px;')); ?><?php echo $user_inf['email']; ?></p>
    		<a href="#" class="button info"><span><?php echo $this->Html->link(__('Chi tiết'), array('controller' => 'nhanviens', 'action' => 'view',$user_id),array('class'=>'button info')); ?></span></a>
		</div>
	</div>
</div>
<?php else: ?>
	<div class="box-information">
		<div class="myInfo">
			<i class="icon-menu icon-menu5" style="margin-top: 7px;margin-left: 12px;"></i>
			<p>THÔNG TIN CÁ NHÂN</p>
			<i class="fa fa-plus" style="position: absolute;top: 8px;left: 276px;"></i>
		</div>
		<div class="mainInfo">
			<h5>Hiện tài khoản chưa map với nhân viên nào!</h5>
		</div>
	</div>
<?php endif; ?>

<!-- container -->
<div class="container">
	<!-- header-wrap -->
	<!-- phần trên cùng của trang chứa các thanh điều hướng -->	
	<div class="header-wrap">
		<div class="row">
			<div class="1triggered" id="topmenu">
				<ul class="dropdown clearfix boxed">
					<li class="top-li">
						<a href="#Index">
							<span>Trang Chủ</span>
						</a>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Dự Án</span>
						</a>
						<ul>
                                        <li><?php echo $this->Html->link(__('Danh sách dự án'), array('controller' => 'Duans','action' => 'index')); ?></li>
                                        <li><?php echo $this->Html->link(__('Khởi tạo dự án'), array('controller' => 'Duans','action' => 'add')); ?></li>
                                        <li><?php echo $this->Html->link(__('Chấm công'), array('controller' => 'Duans','action' => 'listchamcong')); ?></li>
                                        <li><?php echo $this->Html->link(__('Khai báo công việc'), array('controller' => 'Duans','action' => 'khaibao')); ?></li>
			            </ul>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Nhân Sự</span>
						</a>
						<ul>
			                <li><?php echo $this->Html->link(__('Nhân viên'), array('controller' => 'Nhanviens','action' => 'index')); ?></li>
			                <li><?php echo $this->Html->link(__('Team'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
			                <li><?php echo $this->Html->link(__('Tài khoản'), array('controller' => 'taikhoans', 'action' => 'index')); ?> </li>
			                <li><?php echo $this->Html->link(__('Chức vụ'), array('controller' => 'chucvu', 'action' => 'index')); ?></li>
			                <li><?php echo $this->Html->link(__('Xin nghỉ'), array('controller' => 'nhanviens','action' => 'xinnghi')); ?></li>
			                
			            </ul>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Văn Phòng</span>
						</a>
						<ul>
			                <li><?php echo $this->Html->link(__('Sự kiện'), array('controller' => 'hoatdongs','action' => 'index')); ?></li>
			                <li><?php echo $this->Html->link(__('Đăng ký cơm'), array('controller' => 'nhanviens','action' => 'dangkicom')); ?></li>
			            </ul>
					</li>
				</ul>
			</div>
		</div>
		<span class="bottomHeaderWrap"></span>
	</div>

	<!-- phần main chính chứa thông tin cá nhân và các thông tin chính khác - ds nhân sự, dự án, tick cơm -->
	<div class="main-wrap row">
		<!-- Phần chèn vào các trang web thành phần -->
		<div class="mainUnit">
		<!-- SỬ DỤNG PHP ĐỂ CHÈN VÀO CÁC TRANG -->		 
			<?php //echo $this->Session->flash(); ?>























			<div id="messages">
				<?php
				    //if ($session->check('Message.flash')) $session->flash(); // the standard messages
				    // multiple messages
				    if ($messages = $this->Session->read('Message.multiFlash')) {
				        foreach($messages as $k=>$v)
				        	//if(isset($k)){
				        		echo $this->Session->flash('multiFlash.'.$k);
				        	//}
				        
				    }
				?>
			</div>

























			
			<?php echo $this->fetch('content'); ?>	
		</div>
			<!-- phần bottom -->
	</div>
	<div class="bottom-wrap">
		<p style="margin-top: 8px;text-align: center;font-weight: normal;font-size: 1em;color: #C2BAA8;"><i class="fa fa-flag"></i>Sản phẩm cho đồ án</p>
	</div>
	
</div>

</body> 
</html>