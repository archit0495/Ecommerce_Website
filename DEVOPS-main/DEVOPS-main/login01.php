<?php
$email = $_POST['email'];
$password = $_POST['password'];
$con = new mysqli("localhost", "root","","test");
if($con->connect_error){
    die("Failed to connect : ".$con->connect_error);
}else{
    $stmt= $con->prepare("Select * from registration where email = ?");
    $stmt->bind_param("s");
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if($stmt_result->num_rows>0){
        echo "<h2>login succesful</h2>";

    }else{
        echo "<h2>Invalid Email or Password</h2>";
        
    }
} 
?>