<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/pic1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/Cricket2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/Painting1.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">About Us</h2>
	</div>

	<div class="container-fluid">
        <div class="row">
            
        	<div class="col-lg-6 col-md-6 col-12">
        	    <img src = "images/karate-classes.jpg" class="img-fluid" width="100%" height="250px">
        	</div>
        	
            <div class="col-lg-6 col-md-6 col-12">
             <p class="py-3"><h3><i>&#8220;Pressing the right buttons so that students
                                    are motivated to learn is often the key and
                                    that’s where the Sport in Education
                                    initiative can make a real difference.&#8221; <br>
                                    &#8211; Hon Murray McCully, Minister for Sport and Recreation.</i></h3>
             <a href="about.php" class = "btn btn-success" >check more </a>
             </div>
        </div>
    </div>    
    
</section>

<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Our Gallery</h2>

	</div>
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Chess.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Cricket2.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Painting1.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Kayaking.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Gymnasium.png" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Baseball.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Chess1.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/Skateboard.jpg" class="img-fluid pb-4">
	</div>
	<div class="col-lg-4 col-md-4 col-12">
			<img src="images/TableTennis.jpg" class="img-fluid pb-4">
	</div>
</div>
</div>
</section>



<section class="my-5">
	<div class="py-5">
		<h2 class="text-center">Contact US</h2>

	</div>
	<div class="w-50  m-auto">
	<form action="userinfo.php" method="post">
		<div class="form-group">
			<label>username</label>
			<input type="text" name="user" autocomplete="off" class="form-control" >
</div>
<div class="form-group">
			<label>email-id</label>
			<input type="text" name="email" autocomplete="off" class="form-control" >
</div>
<div class="form-group">
			<label>mobile</label>
			<input type="text" name="mobile" autocomplete="off" class="form-control" >
</div>

<div class="form-group">
			<label>comments</label>
			<textarea class ="form-control" name="comments"></textarea>
</div>
<button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>