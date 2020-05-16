<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP Learning</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="style.css">
  
</head>
<body>
   
  <div class="login-wrap">
  <div class="login-html">

    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="user/login.php" method="GET">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>

        <p class="text-center">
       
          <a href="recoveremail.php">Forgot Password?</a>
       </p>
      </form>
      <form class="sign-up-htm" action=".user/signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </form>
    </div>
  </div>
</div>
</label>
  </div>
  
</body>
</html>

<?php require_once('../include/Session.php');?>
<?php require_once('../include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('../SMS/header.php') ?>
    <div class="header-section jumbotron">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="text-center">
          
          REGISTRATION FORM
          
        </h2> 
      </div>
    </div>
  </div>
</div>

<div class="container jumbotron">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <h2 class="text-center">INSERT STUDENT DETAIL</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
            Roll No.:<input type="text" class="form-control" name="roll" placeholder="Enter Roll No." >
          </div>
          <div class="form-group">
           Student Full Name:<input type="text" class="form-control" name="fullname" placeholder="full name" required>
          </div>
          <div class="form-group">
           Student Gender:<input type="text" class="form-control" name="studentgender" placeholder="gender" required>
          </div>
           <div class="form-group">
           Date Of Birth:<input type="text" class="form-control" name="dateofbirth" placeholder="dateofbirth" required>
          </div>

          <div class="form-group">
             City: <input type="text" class="form-control" name="city" placeholder="Enter City" required>
          </div>
         <div class="form-group">
    parentfullname:<input type="text" class="form-control" name="parentfullname" placeholder="full name" required>

          <div class="form-group">
            Parent Email adddress:<input type="email" class="form-control" name="email" placeholder="Enter Email" required>
          </div>
          <div class="form-group">
            Parent Phone No.:<input type="text" class="form-control" name="pphone" placeholder="Enter Parent Phone No." required>
          </div>
          <div class="form-group">
            Standard:<input type="number" class="form-control" name="standard" placeholder="Enter Student Standard" required>
          </div>
          <div class="form-group">
            Activity:<input type="text" class="form-control" name="activity" placeholder="Enter Activity" required>
          </div>
           <div class="form-group">           
            Image:<input type="file" class="form-control" name="simg" required>
          </div>

          <button type="submit" name="submit" class="btn btn-success btn-lg">INSERT</button>
      </form>
    </div>
  </div>
</div>
</form>
</div>
<?php include('../SMS/footer.php') ?>

<?php 

  if (isset($_POST['submit'])) {
    if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
    
      include ('../dbcon.php');
      $roll=$_POST['roll'];
      $name=$_POST['fullname'];
      $studentgender=$_POST['studentgender'];
      $dateofbirth=$_POST['dateofbirth'];

      $city=$_POST['city'];
            $parentfullname=$_POST['parentfullname'];
      
      $email=$_POST['email'];
      $pphone=$_POST['pphone'];
      $standard=$_POST['standard'];
      $activity=$_POST['activity'];
      include('ImageUpload.php');
  
      $sql = "INSERT INTO `student`( `rollno`, `name`,'studentgender',`city`,`email`, `pcontact`, `standard`,`activity`,`image`) VALUES ('$roll','$name','$city','$email','$pphone',$standard,'$activity','$imgName')";

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
          alert("Please insert atleast roll no. and fullname");
        </script>
        <?php
    }


  }

 ?>



