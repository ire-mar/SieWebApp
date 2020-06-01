<?php 
include_once MAIN_INDEX_PATH.'config/database.php';
$database = new Database();
  $db = $database->getConnection();
  $query = "SELECT * FROM student where role=".$_SESSION['user_id'];  
  /*$query = "SELECT
          s.`rollno`, s.`name`, s.`studentgender`, s.`dateofbirth`,s.`city`,
          s.`parentfullname`, s.`email`, s.`activity`, s.`pcontact`,s.`standard`,s.`image`,u.`teacher_id`
          FROM student s 
          JOIN activity u ON u.id=s.activity
          WHERE s.`role`='".$_SESSION['user_id']."'";*/
  $stmt = $db->prepare($query);
  $stmt->execute();
  $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  $query_parent = "SELECT * FROM users where id=".$_SESSION['user_id'];
  $stmt_parent= $db->prepare($query_parent);
  $stmt_parent->execute();
  $row_parent = $stmt_parent->fetch(PDO::FETCH_ASSOC);
?>
<section class="my-5" >
<a href="student_add.php"><button type="button" id="save"  class="btn btn-success">Add Student</button></a>
</section>

<section class="my-5">  
  <div class="container">
    <div class="row">
        <div class="col-md-12">
          <table id="datatable" class="table-striped table-bordered">
                     
                        <tr>                         
                          </tr>
                          <tr>
                          <th>Parent Full Name</th>
                          <td><?php echo $row_parent['name'];?></td>
                          </tr>
                          <tr>
                          <th>Address</th>
                          <td><?php echo $row_parent['address'];?></td>
                          </tr>
                          <tr>
                          <th>Email</th>
                          <td><?php echo $row_parent['email'];?></td>
                          </tr>
                          <tr>
                          <th>Contact Number</th>
                          <td><?php echo $row_parent['phone'];?></td>
                        </tr>
                        </table>          
        <div class="clearfix"></div>
        </div>
            <div class="col-md-12">
                <table id="datatable" class="table table-striped table-bordered">
                          <thead>
                              <tr>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>Gender</th>
                                <th>Date of Birth</th>
                                <th>Activity</th>
                                <th>image</th>
                                <th></th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php for($i=0;$i<count($row);$i++){?>
                                <tr>
                                  <td><?php echo $row[$i]['rollno'];?></td>
                                  <td><?php echo $row[$i]['name'];?></td>
                                  <td><?php echo $row[$i]['studentgender'];?></td>
                                  <td><?php echo date("m/d/Y", strtotime($row[$i]['dateofbirth'])) ;?></td>
                                  <td><?php $query_parent = "SELECT name FROM activity where id=".$row[$i]['activity'];
                                  $stmt_parent= $db->prepare($query_parent);
                                  $stmt_parent->execute();
                                  $row_parent = $stmt_parent->fetch(PDO::FETCH_ASSOC);
                                echo $row_parent['name'];?></td>
                                  <td><img src="images/<?php echo $row[$i]['image'];?>" class="img-fluid" style="width:50px; height:50px;"></td>
                                  <td><a href="student_detail.php?id=<?php echo $row[$i]['id'];?>" class="btn btn-success">View</a></td>
                                </tr>
                               <?php } ?> 
                          </tbody>
                  </table>
              </div>
        <div>
          <iframe src="https://calendar.google.com/calendar/b/1/embed?height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Pacific%2FAuckland&amp;src=c2lld2ViYXBwMzdAZ21haWwuY29t&amp;src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&amp;src=ZW4ubmV3X3plYWxhbmQjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%23039BE5&amp;color=%2333B679&amp;color=%230B8043" style="border:solid 1px #777" width="800" height="600" frameborder="0" scrolling="no"></iframe>
       </div>
  </div>
</div>
</section>

<div>
 

</body>
</html>