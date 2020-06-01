<?php 

function AdminAreaAccess() {
	if (!isset($_SESSION['uid'])) {
	
		header('location: ../login.php');
    }
}


function ErrorMessage() {

if (isset($_SESSION['ErrorMessage'])) {

	$Output = "<div class=\"alert alert-danger\">";
	$Output.= htmlentities($_SESSION['ErrorMessage']);
	$Output.="</div>";
	$_SESSION['ErrorMessage'] = null;
	return 	$Output;
	
    }
}

function SuccessMessage() {

if (isset($_SESSION['SuccessMessage'])) {

	$Output = "<div class=\"alert alert-success\">";
	$Output.= htmlentities($_SESSION['SuccessMessage']);
	$Output.="</div>";
	$_SESSION['SuccessMessage'] = null;
	return 	$Output;
    }
}


 ?>

<?php 

function Redirect_to($new_location) {
	header("Location:".$new_location);
	exit;
}

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

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">ACTIVITY BOOKING DETAILS</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  
				  <!--<div class="form-group">
				    Roll No.:<input type="text" class="form-control" name="roll" placeholder="Enter Roll No." >
				  </div>-->
				  <div class="form-group">
				    Parent Full Name:<input type="text" class="form-control" name="parentfullname" placeholder="full name" required>
				  </div>

				  <div class="form-group">
				    Parent Email Address:<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
				  </div>

				  <div class="form-group">
				    Parent Phone No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Parent Phone No." required>
				  </div>

				  <div class="form-group">
				    Student Full Name:<input type="text" class="form-control" name="fullname" placeholder="full name" required>
				  </div>
				 <div class="form-group">
				   Student Gender:<select type="text" class="form-control" name="studentgender" placeholder="gender" required>
				  					<option>GENDER</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Diverse</option>
                                    </select>                        
				  </div>

				   <div class="form-group">
				    Student Date Of Birth:<input type="date" class="form-control" name="dateofbirth" placeholder="yyyy/mm/dd" required>
				  </div>

				  <div class="form-group">
				    Address: <input type="text" class="form-control" name="city" placeholder="Home Address" required>
				  </div>

				   <div class="form-group">
				    Activity name:<input type="text" class="form-control" name="activity" placeholder="Enter Activity" required>
				  </div>				  
				  
				  <div class="form-group">
				   Student Age Group:<select type="text" class="form-control" name="standard" placeholder="Age Grpup" required>		
				   					<option>Select Age Group</option>
				  					<option>Age 4 to 7</option>
                                    <option>Age 8 to 11</option>
                                    <option>Age 12 to 15</option>
                                    </select>                        
				  </div>
				 
				   <div class="form-group">				    
				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				   <div class="form-group">				    
				    Emergency Contact:<input type="text" class="form-control" name="ecphone" placeholder="Enter Emergency Phone No." required>
				  </div>

				   <div class="form-group">				    
				    Allergies/Medical Condition:
    				<textarea class="form-control" id="subject" name="amcondition" placeholder="Notes on any allergies or any medicl condition..." style="height:200px"></textarea>
				  </div>

				   <button type="submit" name="submit" class="btn btn-success btn-lg">REGISTER</button>
			</form>
		</div>
	</div>
</div>



<?php include('footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['email']) && !empty($_POST['fullname'])) {
		
			include ('../config/database2.php');
			
			$name=$_POST['fullname'];
			$studentgender=$_POST['studentgender'];
			$dateofbirth=$_POST['dateofbirth'];
			$city=$_POST['city'];
            $parentfullname=$_POST['parentfullname'];
			$email=$_POST['email'];
			$pphone=$_POST['pphone'];
			$standard=$_POST['standard'];
			$activity=$_POST['activity'];
			$ecphone=$_POST['ecphone'];
			$amcondition=$_POST['amcondition'];
			include('ImageUpload.php');
  
			$sql = "INSERT INTO `student`( `name`,`studentgender`, `dateofbirth`,`city`,`email`, `parentfullname`,`pcontact`, `standard`,`activity`,`image`,`emergencycontact`,`amcondition`) VALUES ('$name','$studentgender','$dateofbirth','$city','$email','$parentfullname','$pphone','$standard','$activity','$imgName','$ecphone','$amcondition')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert atleast email and fullname");
				</script>
				<?php
		}
	}
 ?>