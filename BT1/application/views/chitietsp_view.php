<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chi tiết sản phẩm</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/footer.css">
   
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
							<a class="dropdown-item" href="#">Apple</a>
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
		

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
    <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
    <li class="breadcrumb-item"><a href="#">Apple(iPhone)</a></li>
    <li class="breadcrumb-item active" aria-current="page">iPhone Xsmax 256GB</li>
  </ol>
</nav>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-md-6">
             <img style="height: 80vh" src="<?php echo(base_url()) ?>Pic/512.png">
    </div>


			
			<div class="col-md-6">
				<div class="container">
					<h2 style="margin-top:100px ">43.000.000 VNĐ</h2>
				</div>
				<div class="container">
					<h3>Thông số </h3><br>
					 <p>Màn hình: 6.5 inch <br>
					Camera chính: 12MP <br>
						Camera selfie: 7 MP <br>
						Ram : 4G
					</p><div class="col-sm-9 col-md-9">
          <div class="panel panel-default">
            
           <div class="card border-primary mb-3" style="max-width: 18rem;">
  <div class="card-header" >Chương trình khuyến mãi</div>
  <div class="card-body text-dark">
    
    <p class="card-text" style="margin-left: 20px">Trả góp 0% <br>
    	                 Tặng kính cường lực
     </p>
  </div>
</div>
          </div>
        </div>
				</div>
				<div class="container">
					
					<button type="button" class="btn btn-danger btn-lg btn-block" id="giohang"><a href="
						<?php echo(base_url())?>index.php/ctsp/giohang">Thêm vào giỏ hàng</a></button>


					

					
					
				</div>
			</div>
		</div>
	</div>
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
						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Tập đoàn viễn thông Xiaolin</a></li>
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
</body>
</html>