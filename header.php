<html>
<body>
<head>

<title></title>


 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href ="css/style.css">

 <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">SiE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Login  </button>
        <div class="dropdown-menu">
           <a class="dropdown-item" href="./admin/login/login.php">Admin Login</a>
           <a class="dropdown-item" href="./parent/login/login.php">Parent Login</a>
            <a class="dropdown-item" href="./teacher/login/login.php">Teacher Login</a>
        </div>
      </div>
    </ul>
  </div>
</nav>