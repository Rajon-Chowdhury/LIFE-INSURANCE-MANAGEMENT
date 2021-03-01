<?php include('loginserver.php') ?>
<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="astyle.css">
</head>
    <body>
      <div class="login-box">
        <img src="avatar.png" class="avatar">
   <div class="header">
  	<h2>Agent Login Here</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="login_user">Login</button>
  	</div>

  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
    </body>
</html>
