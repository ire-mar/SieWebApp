<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SiE Student View</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="../assets/css/style.css">
  <?php 
    session_start();
	include_once '../config/database.php';
	$database = new Database();
	$db = $database->getConnection();
	$query_parent = "SELECT * FROM student  where role=".$_SESSION['user_id'];
	$stmt_parent= $db->prepare($query_parent);
	$stmt_parent->execute();
	$row_parent = $stmt_parent->fetchALL(PDO::FETCH_ASSOC);
?>
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
  <?php if (isset($_SESSION['error'])){?>
	  <p class="session_error_message" style="color:#d9102cc7;"><?php echo $_SESSION['error'];
				$_SESSION['error']='';
		?>
	   </p>
  <?php }?>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Choose Student</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab" style="display:none;">Sign Up</label>
    <div class="login-form">
    
      <input id="activity_id" name="activity_id" type="hidden" class="input" value="<?php echo $_GET['id'];?>">
        <div class="group">
          <label for="user" class="label">Student</label>
                    <select class="form-control input" name="student" id="student" >
                            <option>Choose Student</option>
                            <?php for($i=0;$i<count($row_parent);$i++){?>
                            <option value="<?php echo $row_parent[$i]['id'];?>"><?php echo $row_parent[$i]['name'];?></option>
                           <?php }?>
                    </select>
        </div>
        <div class="group">       
            <button type="button" onClick="get_student();" id="save"   class="button">Submit</button>
        </div>
        <div class="hr"></div>
        
     
    </div>
  </div>
</div>
</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
function get_student(){
	var student = $("#student").val(); 
    var activity_id = $("#activity_id").val(); 
    $.ajax({
            url:"login/student_activity_add_process.php", //the page containing php script
            type: "post", //request type,       
            data: {"student":student,"activity_id":activity_id,},
            success:function(data){ 
              if(data==1){
				   	window.location='index.php';
			   }else{
				   $('.session_error_message').html('Please enter all required fields...');
			   }  
           }
       });
	
	
}
</script>