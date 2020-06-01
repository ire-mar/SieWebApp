<?php
require_once('.\header.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMS</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

<div class="header-section jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">
          <span><a href="../parent/index.php" class="btn btn-success" style="float: left;">BACK TO PROFILE PAGE</a><span>
          REGISTRATION FORM       
        </h2> 
      </div>
    </div>
  </div>
</div>

<section class="m-5">
	<div class="container jumbotron">
		<div class="row">
		              <div class="col-md-12 col-sm-12 col-xs-12">
                
                    <h2>Student Admission Form </h2>                  
                    <div class="clearfix"></div>
                 
                   <div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Name <span class="required">*</span>
                        </label>
                          <input type="text" id="stud_name" name="stud_name" required  placeholder="Name" class="form-control">
                        </div>
                      </div>
                      
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Parent Name <span class="required">*</span>
                        </label>
                          <input type="text" id="parent_name" name="parent_name"  placeholder="Parent Name" required class="form-control">
                        </div>
                      </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Email <span class="required">*</span></label>
                          <input id="email"  name="email" class="form-control" placeholder="Email" type="text" >
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Contact No <span class="required">*</span></label>
                        
                          <input id="contact_no" name="contact_no" class="form-control" placeholder="Contact No" type="text" >
                        </div>
                      </div>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Student Age Group: <span class="required">*</span></label>
                          <select id="stud_class" name="standard" class="form-control " placeholder="Class" type="text">
                            <option>Select Age Group</option>
                                    <option>Age 4 to 7</option>
                                    <option>Age 8 to 11</option>
                                    <option>Age 12 to 15</option>
                                    </select>

                          </select>
                        </div>
                      </div>
                       <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Address <span class="required">*</span></label>
                          <textarea  id="city" name="city" class="form-control" placeholder="Address" type="text"></textarea>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Gender<span class="required">*</span></label>
                          <div id="gender" >
                            <label>
                              <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                            </label>
                            <label>
                              <input type="radio" name="gender" value="female"> Female
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Date Of Birth <span class="required">*</span>
                        </label>
                        
                          <input id="datepicker-12" name="dob" class="form-control"  placeholder="mm/dd/yyyy" required type="text">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                       <div class="form-group"  id="img_val">
                        <label>Upload Image <span class="required">*</span>
                        </label>
                          <input type="file" onChange="upload_process(this.value);" name="uploadpicture" id="uploadpicture">
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label>Emergency Contact: <span class="required">*</span>
                        </label>
                         <input id="ecphone" name="ecphone" class="form-control" placeholder="Enter Emergency Phone No." type="text" >
                        </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                        <label> Allergies/Medical Condition: <span class="required">*</span>
                        </label>
                         <input id="subject" name="amcondition" class="form-control" placeholder="Notes on any allergies or any medicl condition..." type="text" >
                        </div>
                      </div>
                      <?php 
include_once MAIN_INDEX_PATH.'config/database.php';
$database = new Database();
	$db = $database->getConnection();
	$query = "SELECT * FROM activity";
	$stmt = $db->prepare($query);
	$stmt->execute();
	$row = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
                       <input type="hidden" name="img_name" id="img_name" value=""/>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      	<div class="form-group">
                        <label>Activity <span class="required">*</span></label>
                          <select class="form-control" name="activity" id="activity">
                            <option>Choose Activity</option>
                            <?php for($i=0;$i<count($row);$i++){?>
                            <option value="<?php echo $row[$i]['id'];?>"><?php echo $row[$i]['name'];?></option>
                           <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      	<div class="form-group">
                         <a href ="../parent/index.php"> <button type="submit" class="btn btn-primary">Cancel</button></a>
                          <button type="button" id="save"  class="btn btn-success">Submit</button>
                        </div>
                      </div>
                   <p class="session_error_message" style="color:#d9102cc7;"></p>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            </section>   
	
       
<?php require_once(INDEX_PATH.'footer.php');?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel = "stylesheet">
         

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
   <script>
	  jQuery(document).ready(function() {
       $(function() {
            $( "#datepicker-12" ).datepicker();
            $( "#datepicker-12" ).datepicker("dateFormat", "mm/dd/yyyy");
         });      
    });
   
   
	</script>		 		 
   <script> 
$("#save").click(function(){
  var stud_name = $("#stud_name").val(); 
  var parent_name = $("#parent_name").val(); 
  var email = $("#email").val(); 
  var contact_no = $("#contact_no").val(); 
  var standard = $("#standard").val();  
  var dob = $("#datepicker-12").val(); 
  var activity = $("#activity").val();
  var ecphone = $("#ecphone").val();
  var amcondition = $("#amcondition").val();
  var city = $("#city").val(); 
   var img_name = $("#img_name").val(); 
  var gender = $('input[name="gender"]:checked').val();
   $.ajax({
            url:"login/student_add_process.php", //the page containing php script
            type: "post", //request type,       
            data: {"img_name":img_name,"city":city,"gender":gender,"stud_name":stud_name,"parent_name":parent_name,"email":email,"contact_no":contact_no,"standard":standard,"dob":dob,"activity":activity},
            success:function(data){ 
              if(data==1){
				   	window.location='index.php';
			   }else{
				   $('.session_error_message').html('Please enter all required fields...');
			   }  
           }
       });
});
			 
function upload_process(txtFile){
var file_data = $('#uploadpicture').prop('files')[0];
var img_name = $("#img_name").val();
var form_data = new FormData();                  
form_data.append('file', file_data);
form_data.append('img_name', img_name);

document.getElementById("img_val").innerHTML = txtFile;
var extension = txtFile.substr(txtFile.lastIndexOf('.') + 1).toLowerCase();
   var allowedExtensions = ['jpg', 'jpeg','png', 'JPG'];
  if (txtFile.length > 0)
  {
   if (allowedExtensions.indexOf(extension) == -1) 
   { 
    var msg_type="0";    
    var msg_msg='Invalid file Format. Only ' + allowedExtensions.join(', ') + ' are allowed.';    
    set_jnotice(msg_type, msg_msg)
   // document.getElementById("img_val").innerHTML ="";
    return false;
   }
   
   else {
$.ajax({
               url: 'login/upload_process.php', // point to server-side PHP script 
               dataType: 'text',  // what to expect back from the PHP script, if anything
               cache: false,
               contentType: false,
               processData: false,
               data: form_data,                         
               type: 'post',
               success: function(data){
  var res = data.split('^');                
	if(res[0]==1)
	{ 
	document.getElementById("img_name").value =res[1];
	return true;	
	}	
	
                  
               }
    });
}
  }
  

}	

		 
	</script>	 