<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang Admin</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
</head>
<body>
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

   
   	<nav class="navbar navbar-light" style="background-color: pink">
   		<h3 align="center">Admin</h3>
   	</nav>
   	<div class="container">
   <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:10%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="<?php echo(base_url()) ?>Pic/oppo.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin" style="margin-left: 20px">Sản phẩm 1</h4> 
         <p style="margin-left: 20px">Mô tả của sản phẩm 1</p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">20.990.000 đ</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">20.990.000 đ</td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger " >
      <a href="<?php echo(base_url()) ?>index.php/giohang/delete">
        <i class="fa fa-edit" style="color: #ffffff">Xóa</i>
      </a>
    </button> 
   </td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger " >
      <a href="<?php echo(base_url()) ?>index.php/giohang/delete">
        <i class="fa fa-edit" style="color: #ffffff">Sửa</i>
      </a>
    </button> 
   </td> 
  </tr> 
  <tr> 
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="<?php echo(base_url()) ?>Pic/vertuchocolate.jpg" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h3 class="nomargin" style="margin-left: 20px">Sản phẩm 2</h3> 
      <p style="margin-left: 20px">Mô tả của sản phẩm 2</p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">17.990.000 đ</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">17.990.000 đ</td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger " >
      <a href="<?php echo(base_url()) ?>index.php/giohang/delete">
        <i class="fa fa-edit" style="color: #ffffff">Xóa</i>
      </a>
    </button> 
   </td> 
   <td class="actions" data-th="">
    <button class="btn btn-danger " >
      <a href="<?php echo(base_url()) ?>index.php/admin/sua">
        Sửa
      </a>
    </button> 
   </td> 
  </tr> 

  </tbody>
 </table>
 <button class="btn btn-primary"><a href="<?php echo(base_url()) ?>index.php/admin/addsanpham">Thêm sản phẩm</a></button>
      </div>
</body>
</html>