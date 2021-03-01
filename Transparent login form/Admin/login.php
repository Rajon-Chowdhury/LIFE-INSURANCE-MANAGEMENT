<?php include('loginserver.php') ?>
<html>
<head>
    <title> Transparent Login Form Design </title>
    <link rel="stylesheet" type="text/css" href="astyle.css">   
</head>
    <body>
    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form>
				<?php include('errors.php'); ?>
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
           
		   
		   
		   	<div class="input-group">
  	  <button type="submit" class="btn" name="login_user">Login</button>
  	</div>
		   
		   
		   
		   
            <a href="register.php">Register</a>    
            </form>
        
        
        </div>
    
    </body>
</html>