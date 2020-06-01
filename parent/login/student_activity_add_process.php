<?php  
// include database and object files
define('INDEX_PATH','../');
include_once '../../config/database.php';
session_start();
	
	$database = new Database();
	$db = $database->getConnection();
	//$exist=check_existing($username);
	//if(!$exist){
	$activity_id     =	$_POST['activity_id'];	
		$query_st = "SELECT * FROM student WHERE `id`=".$_POST['student'];
		$stmt_st = $db->prepare($query_st);	
		// execute query
		$stmt_st->execute();
		$row = $stmt_st->fetch(PDO::FETCH_ASSOC);//print_r($row);exit;
	
	
			$query = "INSERT INTO student
						( `rollno`,`name`, `studentgender`,`dateofbirth`,`city`,`parentfullname`,`email`,`activity`,`pcontact`,`standard`,`image`,`role`)
						VALUES('".$row['rollno']."','".$row['name']."','".$row['studentgender']."','".$row['dateofbirth']."','".$row['city']."','".$row['parentfullname']."','".$row['email']."','".$activity_id."','".$row['pcontact']."','".$row['standard']."','".$row['image']."','".$_SESSION['user_id']."')";
			$stmt = $db->prepare($query);
			// execute query
			$stmt->execute();			
		
			$to = $row['email'];
			// subject
			$subject = 'Activity Enroll Mail';			
			// message
			$message = '';
            $message .= 'Hi  '. $row['name'].'!';
            $message .= 'Thank you for registering ..';
			// Additional headers
			$headers= 'From:  <test@gmail.com>' . "\r\n";
			// Mail it			
			mail($to, $subject, $message, $headers);
			echo 1;exit;	
			

?>