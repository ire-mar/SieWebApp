<?php 
//create connection
$conn = mysqli_connect('localhost','id13667961_sieparent','*&=K)5[TTR0Owoh~E','id13667961_sieparentlogin');

//check connection

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error()."<br>";
    echo "connection error no: " . mysqli_connect_errno();

} else {
   // echo "connected successfuly";
}


 ?>