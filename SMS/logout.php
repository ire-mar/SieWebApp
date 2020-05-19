<?php 
session_start();
session_destroy();
unset($_SESSION['username']);
$_SESSION['message'] = "You are now logged out";
header('location:../login.php');

 ?>
 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>