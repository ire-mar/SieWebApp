<?php
$con= mysqli_connect('localhost','root');

if($con){
	echo "connection succesful";
}else{

	echo "no connection";
}
	mysqli_select_db($con,'summercampuserdata');
$user =  $_POST['user'];
$email=  $_POST['email'];
$mobile = $_POST['mobile'];
$comments =$_POST['comments'];

$query = "insert into userinfodata (user,email,mobile,comments)

values('$user','$email','$mobile','$comments')";
echo "$query";
mysqli_query($con,
$query);


header('location:index.php')
?>
