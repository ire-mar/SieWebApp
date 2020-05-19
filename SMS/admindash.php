<?php 

function AdminAreaAccess() {
	if (!isset($_SESSION['uid'])) {
		
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

<?php echo AdminAreaAccess(); ?>
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
    			    <span><a href="../SMS/index.php" class="btn btn-success " style="float:left;">HOME</a></span>
    				<h2 class="text-center">
    					WELCOME TO STUDENT MANAGEMENT SYSTEM 
                    </h2>    
    			</div>
    		</div>
    	</div>
    </div>

    <div class="admin-dashboard text-center">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 jumbotron" >
                        <a href="addstudent.php" class="btn btn-info btn-lg">INSERT STUDENT DETAIL</a><br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

