<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>LOGIN</header>
<div class="navbar">
        <img id="lg" src="a/tileslogo.jpg" alt="logo" class="logo" width="10%"> 
        <ul>
        	<li><a href="Full first.html">HOME</a></li>
            <li><a href="MARBLE.html"> MARBLE</a></li>
            <li><a href="Granite.html">GRANITE</a></li>
            <li><a href="Ceramic.html">CERAMIC</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <li><a href="About us.html">About Us</a></li>

        </ul>
        
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