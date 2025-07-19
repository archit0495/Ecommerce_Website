<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>

</div>
	Welcome to my project page	
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
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>