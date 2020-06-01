<?php
// include database and object files
define('INDEX_PATH','../');
include_once '../../config/database.php';
session_start();

// set user property values
$username = isset($_REQUEST['username']) ? $_REQUEST['username'] : die();
$password = isset($_REQUEST['password']) ? $_REQUEST['password'] : die();
$con_password = isset($_REQUEST['con_pass']) ? $_REQUEST['con_pass'] : die();
$role = 'P';
$_SESSION['error']='';
$created = date('Y-m-d H:i:s');
	 if($password==$con_password){
		$stmt=signup_user($username,$password,$role,$created);

		// create the user
		if($stmt && ($stmt->rowCount() > 0)){
			
			// get retrieved row
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
			header('Location: '.INDEX_PATH."index.php");
			}
		else{
			$user_arr=array(
				"status" => false,
				"message" => "Invalid Username or Password!",
			);
			header('Location: '.INDEX_PATH."login/login.php");
		}
	}
	else{
		$_SESSION['error']="Password and confirm password not matching";
		header('Location: '.INDEX_PATH."login/login.php");
	}
		
function signup_user($username,$password,$role,$created){
	
	$database = new Database();
	$db = $database->getConnection();
	$exist=check_existing($username);
	if(!$exist){
		try{
			$query = "INSERT INTO users
						( `username`, `password`,`role`,`created`)
						VALUES('".$username."','".$password."','".$role."','".$created."')";
			$stmt = $db->prepare($query);
			// execute query
			$stmt->execute();
			$query1 = "SELECT
					`id`, `username`, `password`, `created`,`role`
					FROM users
					WHERE `username`='".$username."' AND `password`='".$password."' AND `role`='".$role."'";
			$stmt1 = $db->prepare($query1);

			// execute query
			$stmt1->execute();
			return $stmt1;
			} 
		catch (Exception $e) {
			echo "Error Occured: " .$e->getMessage(). '<br/>';
			return false;
		}
	}
	else{
		return false;
	}
}
function check_existing($username){
	$database = new Database();
	$db = $database->getConnection();
	$query = "SELECT
					id
					FROM users
					WHERE `username`='".$username."'";
			$stmt = $db->prepare($query);
			// execute query
			$stmt->execute();
	if($stmt->rowCount() > 0){
		$_SESSION['error']="User Already Existing";
		return true; 
	}		
	else
		return false;
}
	
?>