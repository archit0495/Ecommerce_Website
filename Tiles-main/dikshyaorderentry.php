<?php
$server_name="localhost";
$username="root";
$password="";
$database_name="order_database";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the connection
if(!$conn)
{
    die("Connection Failed:" . mysqli_connect_error());

}

if(isset($_POST['save']))
{   
$first_name = $_POST['first_name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$street_no = $_POST['street_no'];
$building_no= $_POST['building_no'];
$pincode = $_POST['pincode'];
$alternate_phone = $_POST['alternate_phone'];
$email = $_POST['email'];
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$message = $_POST['message'];
     $sql_query = "INSERT INTO order_entry(Name,Phone_number,Address,Street,Building,Pincode,Aphone,email,State, ChoiceofStone , choiceofstyle , Quantity ,Message)
     VALUES ('$first_name','$phone','$address','$street_no','$building_no','$pincode','$alternate_phone','$email','$item1','$item2','$item3','$item4','$message')";

     if (mysqli_query($conn, $sql_query)) 
     {
        echo "New Details Entry inserted successfully !";
         header('location: "C:\xampp\htdocs\HTMLS1\Tiles\Full first.html"');
     } 
     else
     {
        echo "Error: " . $sql . "" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>