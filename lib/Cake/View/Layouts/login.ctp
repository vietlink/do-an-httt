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
	<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo $cakeDescription ?>:
			<?php echo $title_for_layout; ?>
		</title>
		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap', 'style','styleedit','font-awesome.min'));
		echo $this->Html->script(array('modernizr.min','jquery-1.10.0','jquery-ui.min','bootstrap.min','general'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


	<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
	<!--[if gte IE 9]>
	<style type="text/css">
	    .gradient {filter: none !important;}
	</style>
	<![endif]-->
	<style type="text/css">
		body {
			background-color: #E74C3C;
		}

		.login-screen {
			min-height: 473px;
			padding-top:123px;
			position: relative;
		}

		.login-form {
			width: 359px;
			margin: 0 auto;
			background-color: #edeff1;
			padding: 24px 23px 20px;
			position: relative;
			border-radius: 6px;
		}

		.login-form .login-field {
			background: #fff;
			border-color: transparent;
			font-size: 17px;
			text-indent: 3px;
			line-height: 20px;
		}

		.form-control {
			border: 2px solid #bdc3c7;
			color: #34495e;
			font-family: "Lato", Helvetica, Arial, sans-serif;
			font-size: 15px;
			padding: 8px 12px;
			height: 42px;
			-webkit-appearance: none;
			border-radius: 6px;
			-webkit-box-shadow: none;
			box-shadow: none;
			-webkit-transition: border .25s linear, color .25s linear, background-color .25s linear;
			transition: border .25s linear, color .25s linear, background-color .25s linear;
		}

		.login-form .login-field:focus {
		  border: 2px solid #E74C3C;
		}

		.login-form .login-field:focus + i.fa {
		  color: #E74C3C;
		}

		.login-link {
			color: #bfc9ca;
			display: block;
			font-size: 13px;
			margin-top: 15px;
			text-align: center;
			-webkit-transition: 0.25s;
			transition: 0.25s;
		}

		.login-link:hover {
			color: #E74C3C;
			
		}

		.login-form .fa {
			color: #bfc9ca;
			font-size: 19px;
			position: absolute;
			left: 311px;
			top: 37px;
			-webkit-transition: 0.25s;
			transition: 0.25s;
		}

		.login-form .fa-lock {
			top: 97px;
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
	<div class="login-screen">
		<div class="login-form">
		<form action="/da/taikhoans/login" method="post" id="TaikhoanLoginForm">
			<div class="form-group">
              <input type="text" class="form-control login-field" value="" placeholder="Nhập Tên Tài Khoản" id="login-name" name="data[Taikhoan][username]" required>
              <i class="fa fa-user"></i>
            </div>
            <div class="form-group">
              <input type="password" class="form-control login-field" value="" placeholder="Nhập mật khấu" id="login-pass" name="data[Taikhoan][password]" required="required">
              <i class="fa fa-lock"></i>
            </div>
            <button type="submit" class="button" hidefocus="true" style="outline: none;">Đăng nhập</button>
            </form>
		</div>
	</div>
</body> 
</html>