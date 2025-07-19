<!DOCTYPE html>

<html>

<head>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="LOGINTESTCSS.css">

</head>

<body>

<div class="navbar">
    <img id="lg" src="a/tileslogo.jpg" alt="logo" class="logo" width="10%"> 
    <ul>
        <li><a href="Full first.html">HOME</a></li>
        <li><a href="MARBLE.html"> MARBLE</a></li>
        <li><a href="Granite.html">GRANITE</a></li>
        <li><a href="Ceramic.html">CERAMIC</a></li>
        <li><a href="LOGINTEST.php">LOGIN</a></li>
        <li><a href="About us.html">About Us</a></li>

    </ul>
</div>

     <form action="LOGINTESTDB connection.php" method="post">

        <h2>LOGIN</h2>

        <?php
         if (isset($_GET['error'])) { ?>

            <p class="error"> <?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="uname" placeholder="User Name"><br>

        <label>Password</label>

        <input type="password" name="password" placeholder="Password"><br> 

        <button type="submit">Login</button>

     </form>

</body>

</html>