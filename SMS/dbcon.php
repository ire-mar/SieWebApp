
<?php 
//create connection
$conn = mysqli_connect('localhost','id13667961_siewebapplication','*R2-fG\Us!65(06/','id13667961_siewebapp');

//check connection

if (!$conn) {
    echo "connection failed: " . mysqli_connect_error()."<br>";
    echo "connection error no: " . mysqli_connect_errno();

} else {
   // echo "connected successfuly";
}



 ?>