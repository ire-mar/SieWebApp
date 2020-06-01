<?php 
// include database and object files
define('INDEX_PATH','../');
define('MAIN_INDEX_PATH','../../');
include_once 'config/database.php';
session_start();

 
// get database connection


// set ID property of user to be edited
$username = isset($_REQUEST['user']) ? $_REQUEST['user'] : die();
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : die();
$mobile = isset($_REQUEST['mobile']) ? $_REQUEST['mobile'] : die();
$comments = isset($_REQUEST['comments']) ? $_REQUEST['comments'] : die();

        $to = 'remyasmailbox@gmail.com';
		$subject = 'Contact Mail';
		$from = 'remyasmailbox@gmail.com';
		 
		// To send HTML mail, the Content-type header must be set
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		 
		// Create email headers
		$headers .= 'From: '.$from."\r\n".
			'Reply-To: '.$from."\r\n" .
					 
		// Compose a simple HTML email message
		$message = '<html><body>';
		$message .= '<h1 style="color:#f40;">Contact Mail</h1>';
		$message .= '<p style="color:#080;font-size:18px;">'.$comments.'</p>';
		$message .= '</body></html>';
        
         if(mail($to, $subject, $message, $headers)){  
				
			 $_SESSION['error']='Message could not be sent...';
			 header('Location: index.php'); 
         }else {
		  $_SESSION['error']='Message could not be sent...';
		  header('Location: index.php'); 
           
         }
	
    
    


?>