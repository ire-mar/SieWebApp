<?php  
// include database and object files
define('INDEX_PATH','../');
include_once '../../config/database.php';
session_start();
	
		$path='../images';

		$img_name = $_POST['img_name'];

		$fileor=str_replace(" ","-",$_FILES['file']['name']);
		$file_or = time().basename($fileor);
		$uploaddir = dirname(__FILE__).'/'.$path.'/';

		if(!empty($img_name)){
			if(file_exists($uploaddir.$img_name)){
				unlink($uploaddir.$img_name);
			}
		}

		$uploadfile = $uploaddir . time().basename($fileor);
		$imageFileType = pathinfo($uploadfile,PATHINFO_EXTENSION);
		if(isset($_FILES["file"]))
		{
		$fileName = $_FILES["file"]["name"];
		$ret[$fileName]= $uploadfile.$fileName;
		if(!is_file($ret[$fileName])){
		move_uploaded_file($_FILES["file"]["tmp_name"],$uploadfile);
		
		$val=1;
		$html = $file_or;
		}
		else
		{
		$val=2;
		$html = '';
		}echo $val."^".$html;exit;
		}


	
?>