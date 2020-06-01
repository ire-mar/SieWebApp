<?php
require_once '../config/database.php';
require_once('./header.php');
function get_student_details(){
	$database = new Database();
	$db = $database->getConnection();
	//$query = "SELECT * FROM student where id=".$_GET['id'];	
	$query = "SELECT
					s.`rollno`, s.`name`, s.`studentgender`, s.`dateofbirth`,s.`city`,
					s.`parentfullname`, s.`email`, s.`activity`, s.`pcontact`,s.`standard`,s.`image`,u.`teacher_id`, s.`temail`
					FROM student s 
					LEFT JOIN activity u ON u.id=s.activity
					WHERE s.`id`='".$_GET['id']."'";
	$stmt = $db->prepare($query);
	// execute query
	$stmt->execute();
	return $stmt;
} 

$student_details=get_student_details();
if($student_details && ($student_details->rowCount() > 0)){
			
			// get retrieved row
			$row = $student_details->fetch(PDO::FETCH_ASSOC);
			$rollno=$row['rollno'];
			$name=$row['name'];
			$studentgender=$row['studentgender'];
			$dateofbirth=$row['dateofbirth'];
			$city=$row['city'];
			$parentfullname=$row['parentfullname'];
			$email=$row['email'];
			$activity=$row['activity'];
			$pcontact=$row['pcontact'];
			$standard=$row['standard'];
			$image=$row['image'];
			$teacher_id=$row['teacher_id'];
			$temail=$row['temail'];
								
?>
<style>
.student_detail th, td{ padding:10px;}
</style>
<section class="my-5 py-5">
	<div >
		<h2 class="text-center">Student Detail</h2>
	</div>

	<div class="container-fluid">
        <div class="row">
            
        	<div class="col-lg-3 col-md-3 col-12 text-center">
           
        	<img src="<?php echo MAIN_INDEX_PATH.'Uploads/images/'.$image;?>" class="img-fluid" width="auto" height="100%">
        	</div>
        	
            <div class="col-lg-9 col-md-9 col-12">
			<table id="datatable" class="table-striped table-bordered" class="student_detail" width="60%" border="1">
			
			<tr><th >Name</th><td ><?php echo $name;?></td></tr>
             <tr><th >Roll Number</th><td ><?php echo $rollno;?></td></tr>
			 <tr><th >Gender</th><td ><?php echo $studentgender;?></td></tr>
			 <tr><th >Date Of Birth</th><td ><?php echo date("m/d/Y", strtotime($dateofbirth));?></td></tr>
			 <tr><th >Address</th><td ><?php echo $city;?></td></tr>
			 <tr><th >Parent Name</th><td ><?php echo $parentfullname;?></td></tr>
			 <tr><th >Email</th><td ><?php echo $email;?></td></tr>
			 <tr><th >Activity</th><td ><?php $database = new Database();
									$db = $database->getConnection(); $query_parent = "SELECT name FROM activity where id=".$activity;
									$stmt_parent= $db->prepare($query_parent);
									$stmt_parent->execute();
									$row_parent = $stmt_parent->fetch(PDO::FETCH_ASSOC);
						            echo $row_parent['name'];?></td></tr>
			 <tr><th >Parent Contact</th><td ><?php echo $pcontact;?></td></tr>
			 <tr><th >Standard</th><td ><?php echo $standard;?></td></tr>
              <tr><th >Driving Distance</th><td ><a  target="_blank" href="https://www.google.com/maps/search/?api=1&query=-36.8468529,174.7524773&query_place_id=Auckland,NZ" class="btn btn-success">View Distance in Map</a></td></tr>
              <tr><th>Teacher Name</th><td ><?php echo $teacher_id;?></td></tr>
              <tr><th>Teacher's Email ID</th><td ><a href="mailto:<?php echo $temail;?>"><?php echo $temail;?></a></td></tr>
			 </table>
			</div> 
         </div>
    </div>    
    <div class="clearfix"></div>
</section>

<?php
}
else{?>
	<div class="py-5">
		<h2 class="text-center">Your Student mapping is pending</h2>
	</div>
<?php }
require_once(INDEX_PATH.'footer.php');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  
  <?php 
  ?>