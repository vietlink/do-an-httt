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
	<title>TRANG QUẢN LÝ</title>
	<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
	<!--[if gte IE 9]>
	<style type="text/css">
	    .gradient {filter: none !important;}
	</style>
	<![endif]-->
	
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('style','styleedit','bootstrap'));
		echo $this->Html->script(array('jquery.1.7.2.min','jquery.dataTables.nightly','membell','bootstrap.min','general','jquery.customInput','jquery-byme','jquery-ui.min','modernizr.min'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>

<!-- BODY -->

<body>
<!-- container -->
<div class="container">
	<!-- header-wrap -->
	<!-- phần trên cùng của trang chứa các thanh điều hướng -->	
	<div class="header-wrap">
		<div class="row">
			<div class="myInfo">
				<i class="icon-menu icon-menu5" style="margin-top: 7px;margin-left: 12px;"></i>
				<p>THÔNG TIN CÁ NHÂN</p>
			</div>
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
			                <li><a href="#">Danh sách dự án</a></li>
			                <li><a href="#">Khởi tạo dự án</a></li>
			            </ul>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Nhân Sự</span>
						</a>
						<ul>
			                <li><a href="#">Nhân viên</a></li>
			                <li><a href="#">Nhóm/bộ phận</a></li>
			                <li><a href="#">Nghỉ phép</a></li>
			            </ul>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Văn Phòng</span>
						</a>
						<ul>
			                <li><a href="#">Sự kiện</a></li>
			                <li><a href="#">Đặt cơm</a></li>
			            </ul>
					</li>
					<li class="top-li">
						<a href="#Index">
							<span>Chấm Công</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<span class="bottomHeaderWrap"></span>
	</div>

	<!-- phần main chính chứa thông tin cá nhân và các thông tin chính khác - ds nhân sự, dự án, tick cơm -->
	<div class="main-wrap row">
		<div class="mainInfo">
			<span class="info-group">BOM</span>
			<div class="inner-info">
				<h5>Trương hoàng linh</h5>
			    <div class="avatar" style="margin-bottom:16px;">
	       			 <img src="images/temp/avatar.png" alt="" class="img-circle"/>
	    		</div>
	    		<p style="margin-bottom: 0px"><img src="images/iconPhang/1.png" style="width: 15px;margin-right: 6px;" alt=""/>0904714021</p>
	    		<p style="font-size: 0.8em;"><img src="images/iconPhang/2.png" style="width: 20px;margin-right: 6px;" alt=""/>linhtinh@gmail.com</p>
	    		<a href="#" class="button info"><span>Chi tiết</span></a>
    		</div>
		</div>
		<div class="marginMainUnit"></div>


		<!-- Phần chèn vào các trang web thành phần -->
		<div class="mainUnit">
		<!-- SỬ DỤNG PHP ĐỂ CHÈN VÀO CÁC TRANG -->








		<div class="row main infoPersonal">
			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>












































		</div>



	</div>

	<!-- phần bottom -->
	<div class="bottom-wrap">
		<p>Sản phẩm cho đồ án</p>
	</div>
</div>
</body> 
</html>