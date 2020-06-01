<?php  
// include database and object files
define('INDEX_PATH','../');
include_once '../../config/database.php';
session_start();
	
	$database = new Database();
	$db = $database->getConnection();
	//$exist=check_existing($username);
	//if(!$exist){
	$stud_name    =	$_POST['stud_name'];
	$parent_name  =	$_POST['parent_name'];
	$email        =	$_POST['email'];
	$contact_no   =	$_POST['contact_no'];
	$dob          =	date_create($_POST['dob']);
	$activity     =	$_POST['activity'];
	$stud_name    =	$_POST['stud_name'];
	$gender    =	$_POST['gender'];
	$city    =	$_POST['city'];
	$stud_class    =	$_POST['stud_class'];
	$img_name          =	$_POST['img_name'];
		if($stud_name!='' && $parent_name!=='' && $email!=='' && $contact_no!=='' && $dob!==''&& $activity!=='' && $stud_name!=='' && $gender!=='' && $city!==''&& $stud_class!=='' && $img_name!==''){
			$query = "INSERT INTO student
						( `name`, `studentgender`,`dateofbirth`,`city`,`parentfullname`,`email`,`activity`,`pcontact`,`standard`,`image`,`role`)
						VALUES('".$stud_name."','".$gender."','".date_format($dob,"Y-m-d")."','".$city."','".$parent_name."','".$email."','".$activity."','".$contact_no."','".$stud_class."','".$img_name."','".$_SESSION['user_id']."')";
			$stmt = $db->prepare($query);
			// execute query
			$stmt->execute();
			$id = $db->lastInsertId();
			$rollno = "10".$id;
			$sql = "UPDATE student SET rollno=".$rollno." WHERE id=".$id;
			$stmt1 = $db->prepare($sql);
			// execute query
			$stmt1->execute();
			 echo 1;exit;	
		}else{
			
			echo 2;exit;	
		}
			
		
	

	
?>