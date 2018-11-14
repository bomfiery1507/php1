<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">

	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/login.css">
	<script type="text/javascript" src="<?php echo(base_url()) ?>vendor/demo.js"></script>


</head>
<body>
	
		<div class="wrapper">
  <form class="login" action="<?php echo(base_url());  ?>index.php/admin" method="POST" >
    <p class="title">Log in</p>
    <input type="text" placeholder="Username" autofocus/>
    <i class="fa fa-user"></i>
    <input type="password" placeholder="Password" />
    <i class="fa fa-key"></i>
    <a href="#">Forgot your password?</a>
    <button>
      <i class="spinner"></i>
      <span class="state"><a class="nav-link" href="<?php echo(base_url()) ?>index.php/login/bt"></a> Log in</span>
    </button>
  </form>
  <footer><a target="blank" href="http://boudra.me/">3hshop.com.vn</a></footer>
  </p>
</div>

</body>
</html>