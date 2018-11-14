<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa sản phẩm</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-light" style="background-color: Pink">
	<h3 align="center">Sửa sản phẩm</h3> 
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-8 push-md-3">
				<form method="POST" action="#">
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Mã điện thoại  </label>
			    <div class="col-sm-10">
			      <input type="text" name="ma" class="form-control" id="inputEmail3" placeholder="Nhập mã điện thoại">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Tên điện thoại </label>
			    <div class="col-sm-10">
			      <input type="text" name="ten" class="form-control" id="inputEmail3" placeholder="Nhập tên điện thoại">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Giá bán </label>
			    <div class="col-sm-10">
			      <input type="text" name="gia" class="form-control" id="inputPassword3" placeholder="Nhập giá">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Màn hình </label>
			    <div class="col-sm-10">
			      <input type="text" name="scr" class="form-control" id="inputEmail3" placeholder="Nhập kích thước">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Camera chính </label>
			    <div class="col-sm-10">
			      <input type="text" name="cam" class="form-control" id="inputEmail3" placeholder="Nhập độ phân giải">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Camera selfie </label>
			    <div class="col-sm-10">
			      <input type="text" name="selfie" class="form-control" id="inputEmail3" placeholder="Nhập độ phân giải">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Ram </label>
			    <div class="col-sm-10">
			      <input type="text" name="ram" class="form-control" id="inputEmail3" placeholder="Nhập dung lượng Ram">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">CPU </label>
			    <div class="col-sm-10">
			      <input type="text" name="cpu" class="form-control" id="inputEmail3" placeholder="Nhập thông tin CPU">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Dung lượng pin </label>
			    <div class="col-sm-10">
			      <input type="text" name="dlp" class="form-control" id="inputEmail3" placeholder="Nhập dung lượng">
			    </div>
			  </div>
			  <div class="form-group row">
			    <label for="inputEmail3" class="col-sm-3 col-form-label">Hệ điều hành </label>
			    <div class="col-sm-10">
			      <input type="text" name="hdh" class="form-control" id="inputEmail3" placeholder="Nhập hệ điều hành">
			    </div>
			  </div>


			  
			  <div class="form-group row">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Sửa</button>
			    </div>
			  </div>
			</form>
			</div>
		</div>
	</div>
</body>
</html>