<?php
session_start();
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SiE Parent LogIn</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">   
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="../../assets/css/style.css">  
</head>
<div class="jumbotron text-center" style="background-color: skyblue;">
                <div class="container" >
                    <div class="row">
                        <div class="col-md-12">
                            <h2>
                                <span><a href="../../index.php" class="btn btn-success " style="float: left;">HOME</a></span>
                            PARENT LOGIN
                            </h2>
                        </div> 
                    </div>
                </div>
            </div>
<body style="background-color: beige;">
  <div class="login-wrap">
  <div class="login-html">
  <?php if (isset($_SESSION['error'])){?>
	  <p class="session_error_message" style="color:#d9102cc7;"><?php echo $_SESSION['error'];
				$_SESSION['error']='';
		?>
	   </p>
  <?php } ?>
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login_process.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
		  <input id="role" name="role" type="hidden" class="input" value='P'>
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </form>
      <form class="sign-up-htm" action="signup_process.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="username" name="username" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="con_pass" class="label">Confirm Password</label>
          <input id="con_pass" name="con_pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
            <div class="foot-lnk">
              <label for="tab-1">Already Member?</label>
            </div>
      </form>
    </div>
  </div>
</div>
  
  
</body>
</html>