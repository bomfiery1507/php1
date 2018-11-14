<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>3H Shop|Thế giới điện thoại của bạn</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript">
		$(document).ready(function () {
			$('.navbar-light .dmenu').hover(function () {
				$(this).find('.sm-menu').first().stop(true, true).slideDown(150);
			}, function () {
				$(this).find('.sm-menu').first().stop(true, true).slideUp(105)
			});
		});
	</script>

	
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-dark" style="background-color: black">
			<div class="row">


				<ul class="navbar-nav"> 

					<a class="navbar-brand" href="<?php echo(base_url()) ?>index.php/bt" ><img src="<?php echo(base_url()) ?>Pic/3H.png" width="30" height="30" class="d-inline-block align-top" >3H Shop</a>
					<li class="nav-item active"  style="list-style: none;">

						<div class="form-group has-search">
							<span class="fa fa-search form-control-feedback"></span>
							<input type="text" class="form-control" placeholder="Search.....">
						</div>
					</li>
					<li class="nav-item" style="list-style: none" >
						<a href="<?php echo(base_url()) ?>index.php/bt" class="nav-link" style="margin-left: 100px">Trang chủ</a>
					</li>
					<li class="nav-item dropdown dmenu" style="list-style: none">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"  >
							Sản phẩm
						</a>
						<div class="dropdown-menu sm-menu">
							<a class="dropdown-item" href="<?php echo(base_url()) ?>index.php/apple">Apple</a>
							<a class="dropdown-item" href="#">Samsung</a>
							<a class="dropdown-item" href="#">HTC</a>
							<a class="dropdown-item" href="#">Sony</a>
							<a class="dropdown-item" href="#">Oppo</a>
							<a class="dropdown-item" href="#">Huawei</a>
							<a class="dropdown-item" href="#">Vinsmart</a>
						</div>
					</li>
					<li class="nav-item dropdown dmenu" style="list-style: none">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
							Thông tin
						</a>
						<div class="dropdown-menu sm-menu">
							<a class="dropdown-item" href="#">Mới</a>
							<a class="dropdown-item" href="#">Khuyến mãi</a>

						</div>
					</li>
					<li class="nav-item dropdown dmenu" style="list-style: none">
						<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" >
							Phụ kiên
						</a>
						<div class="dropdown-menu sm-menu">
							<a class="dropdown-item" href="#">Tai nghe</a>
							<a class="dropdown-item" href="#">Ốp</a>
							<a class="dropdown-item" href="#">Cáp sạc</a>
							<a class="dropdown-item" href="#">Thẻ nhớ</a>
							<a class="dropdown-item" href="#">Dán màn hình</a>
						</div>
					</li>
					<li class="nav-item" style="list-style: none">
						<a href="<?php echo(base_url())?>index.php/bt/giohang" class="nav-link" >Giỏ hàng</a>
					</li>
					<li class="nav-item" style="list-style: none">
						<a href="<?php echo(base_url())?>index.php/bt/login" class="nav-link" >Đăng nhập</a>
					</li>
					<li class="nav-item" style="list-style: none">
						<a href="<?php echo(base_url())?>index.php/dk" class="nav-link">Đăng ký</a>
					</li>

				</ul> 

			</div>
		</nav>
	</div>
	<div class="container-fluid">
		<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="background-size: cover; background-image: url(<?php echo(base_url()) ?>Pic/X.png);">

			<div class="container-fluid">
				<div class="row  justify-content-center align-items-center d-flex text-center h-100" style="margin-left: 400px">
					<div class="col-12 col-md-8  h-50 ">
						<p><a href="<?php echo(base_url()) ?>index.php/bt/iphone" class="btn bg-primary btn-round text-light btn-lg btn-rised" style="color: #000000">Tìm hiểu ngay</a></p>

						<div class="btn-container-wrapper p-relative d-block  zindex-1">
							<a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="http://bootstraptor.com">
								<i class="fa fa-angle-down fa-4x text-light"></i>
							</a>   
						</div>   
					</div>

				</div>
			</div>
		</section>	

	</div>
	<div class="container">

</div>
	<div class="container-fluid">
		<h3><a href="<?php echo(base_url()) ?>index.php/apple"> Apple </a></h3>
		<div class="row">
		<div class="col-md-3,5">
			<img style="height: 60vh" src="<?php echo(base_url()) ?>Pic/xs64.jpg">
		</div>
		<div class="col-md-2" style="margin: 100px 0px 0px 0px; ">	
			<a href="<?php echo(base_url()) ?>index.php/iphone" style="font-size: 25px">iPhone Xsmax 64GB</a>
			<p>29.990.000</p>
			
		</div>
		<div class="col-md-6">
			<div class="container">
				<img style="height: 30vh" src="<?php echo(base_url()) ?>Pic/xr64.png">
				<a href="#" style="font-size: 30px" >iPhone XR 64GB</a>
			</div>
			<div class="container">
				<img style="height: 30vh" src="<?php echo(base_url()) ?>Pic/8plus.jpg">
				<a href="#" style="font-size: 30px" >iPhone 8 Plus 64GB</a>
			</div>
		</div>
		</div>
		</div>
	<div class="container-fluid">
		<h3>Samsung</h3>
		<div class="row">
		<div class="col-md-3,5">
			<img style="margin-left: 60px; height: 60vh" src="<?php echo(base_url()) ?>SS/note9512.png">
		</div>
		<div class="col-md-2" style="margin: 100px 0px 0px 0px; ">	
			<a href="#" style="font-size: 25px">Samsung Galaxy Note 9</a>
			<p>21.990.000</p>
			
		</div>
		<div class="col-md-6">
			<div class="container">
				<img style="height: 30vh" src="<?php echo(base_url()) ?>SS/A8p.png">
				<a href="#" style="font-size: 30px" >Samsung Galaxy A8 Plus</a>
			</div>
			<div class="container">
				<img style="height: 30vh" src="<?php echo(base_url()) ?>SS/A8Star.jpg">
				<a href="#" style="font-size: 30px" >Samsung Galaxy A8 Star</a>
			</div>
		</div>
		</div>
		</div>

	


		<div>
			<ul class="pagination" style="margin-left: 500px">
				<li class="page-item disabled">
					<a class="page-link" href="#">&laquo;</a>
				</li>
				<li class="page-item active">
					<a class="page-link" href="#">1</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">2</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">3</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">4</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">5</a>
				</li>
				<li class="page-item">
					<a class="page-link" href="#">&raquo;</a>
				</li>
			</ul>
		</div>


		<!-- Footer -->
		<section id="footer">
			<div class="container">
				<div class="row text-center text-xs-center text-sm-left text-md-left">
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Liên hệ</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="https://www.facebook.com/crawlazy0409"><i class="fa fa-angle-double-right"></i>https://www.facebook.com/crawlazy0409</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>https://www.facebook.com/hieu.justin.hyoyong</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Add: 69 Nguyễn Trãi,Hà Đông</a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Phone: 0923012025</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Chịu trách nhiệm </h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Nhóm cộng tác viên HTA</a></li>
							x
						</ul>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4">
						<h5>Mở cửa</h5>
						<ul class="list-unstyled quick-links">
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right">Mùa hè: 8h - 22h30</i></a></li>
							<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Mùa đông: 7h30 - 22h </a></li>

						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
						<ul class="list-unstyled list-inline social text-center">
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
							<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
			</hr>
		</div>	
	</div>
</section>
<!-- ./Footer -->

</body>
</html>