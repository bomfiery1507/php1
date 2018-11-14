<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="container">






<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Tạo tải khoản</h4>
	<p class="text-center">Hãy tạo tài khoản của bạn</p>
	<form>
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Họ tên" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="" class="form-control" placeholder="Email" type="email">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		<select class="custom-select" style="max-width: 120px;">
		    <option selected="">+84</option>
		    <option value="1">+86</option>
		    <option value="2">+66</option>
		    <option value="3">+39</option>
		</select>
    	<input name="" class="form-control" placeholder="Số điện thoại của bạn" type="text">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control">
			<option selected=""> Nghề nghiệp</option>
			<option>Học sinh</option>
			<option>Kỹ sy</option>
			<option>Bác sĩ</option>
			<option>Khác</option>
		</select>
	</div> <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Mật khẩu" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Nhắc lại mật khẩu" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" href="<?php echo(base_url()) ?>index.php/bt"> Tạo tài khoản  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Có tài khoản <a href="<?php echo(base_url()) ?>index.php/bt/login">Đăng nhập</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
<p class="h5 text-white">Components and templates  <br> for Ecommerce, marketplace, booking websites 
and product landing pages</p>   <br>
</div>
<br><br>
</article>
</html>