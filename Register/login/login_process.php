<?php
// include database and object files
define('INDEX_PATH','../');
define('MAIN_INDEX_PATH','../../');
include_once MAIN_INDEX_PATH.'config/database.php';
session_start();

 
// get database connection


// set ID property of user to be edited
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : die();
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : die();
$role = isset($_REQUEST['role']) ? $_REQUEST['role'] : die();
// read the details of user to be edited
$stmt = login_function($username,$password,$role);
if($stmt->rowCount() > 0){
	
    // get retrieved row
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
	session_start();
	$_SESSION['user']=$row['username'];
	$_SESSION['role']=$row['role'];
	$_SESSION['user_id']=$row['id'];
    // create array
    $user_arr=array(
        "status" => true,
        "message" => "Successfully Login!",
        "id" => $row['id'],
        "username" => $row['username']
    );
	header('Location: '.INDEX_PATH."register.php");
}
else{
    $user_arr=array(
        "status" => false,
        "message" => "Invalid Username or Password!",
    );
	$_SESSION['error']='Invalid Username or Password!';
	 header('Location: '.INDEX_PATH."login/login.php");
}
// make it json format

function login_function($user,$pass,$role){
	$database = new Database();
	$db = $database->getConnection();
	$query = "SELECT
                `id`, `username`, `password`, `created`,`role`
				FROM users
				WHERE `username`='".$user."' AND `password`='".$pass."' AND `role`='".$role."'";
	$stmt = $db->prepare($query);

	// execute query
	$stmt->execute();
	return $stmt;
}
?>