<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Giỏ hàng của bạn</title>
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
  
	<nav class="navbar navbar-light bg-primary">
		<h2 align="center" style="color: #fff">Thông tin mua hàng</h2>
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
  </tr> 

  </tbody><tfoot> 
  	
   <tr> 
    <td><a href="<?php echo(base_url()) ?>index.php/bt" class="btn btn-warning"><i class="fa fa-angle-left"></i>Quay về trang chủ</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền 38.980.000 đ</strong>
    </td> 
    <td><a href="<?php echo(base_url()) ?>index.php/bt/thanhtoan" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td> 
   </tr> 
  </tfoot> 
 </table>
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