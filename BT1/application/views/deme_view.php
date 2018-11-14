<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo</title>
  <script type="text/javascript" src="<?php echo(base_url())?>vendor/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo(base_url())?>vendor/login.css">
  <script type="text/javascript" src="<?php echo(base_url()) ?>vendor/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="<?php echo(base_url()) ?>vendor/login.js"></script>
</head>
<body>
	<div class="login-wrap">
  <h2>Login</h2>
  
  <div class="form">
    <input type="text" placeholder="Username" name="un" />
    <input type="password" placeholder="Password" name="pw" />
    <button> Sign in </button>
    <a href="#"> <p> Don't have an account? Register </p></a>
  </div>
</div>
</body>
</html>