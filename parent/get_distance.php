<?php
require_once('.\header.php');

  /*$apiKey = 'AIzaSyDE0PV6hh6MPVa8bJIPRnicYgyW59ib9cg';
    $addressFrom = "Columbus, OH, USA";
	$addressTo = "Miami, FL, USA";
    // Change address format
    $formattedAddrFrom    = str_replace(' ', '+', $addressFrom);
    $formattedAddrTo     = str_replace(' ', '+', $addressTo);
    
    // Geocoding API request with start address
    $geocodeFrom = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrFrom.'&sensor=false&key='.$apiKey);
    $outputFrom = json_decode($geocodeFrom);
    if(!empty($outputFrom->error_message)){
        return $outputFrom->error_message;
    }
   
    // Geocoding API request with end address
    $geocodeTo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddrTo.'&sensor=false&key='.$apiKey);
    $outputTo = json_decode($geocodeTo);
    if(!empty($outputTo->error_message)){
        return $outputTo->error_message;
    }
    
    // Get latitude and longitude from the geodata
    $latitudeFrom    = $outputFrom->results[0]->geometry->location->lat;
    $longitudeFrom    = $outputFrom->results[0]->geometry->location->lng;
    $latitudeTo        = $outputTo->results[0]->geometry->location->lat;
    $longitudeTo    = $outputTo->results[0]->geometry->location->lng;
    
    // Calculate distance between latitude and longitude
    $theta    = $longitudeFrom - $longitudeTo;
    $dist    = sin(deg2rad($latitudeFrom)) * sin(deg2rad($latitudeTo)) +  cos(deg2rad($latitudeFrom)) * cos(deg2rad($latitudeTo)) * cos(deg2rad($theta));
    $dist    = acos($dist);
    $dist    = rad2deg($dist);
    $miles    = $dist * 60 * 1.1515;
  
    // Convert unit and return distance
    $unit = strtoupper($unit);
    if($unit == "K"){
        return round($miles * 1.609344, 2).' km';
    }elseif($unit == "M"){
        return round($miles * 1609.344, 2).' meters';
    }else{
        return round($miles, 2).' miles';
    }
	
	$source_address = "Columbus, OH, USA";
$destination_address ="Miami, FL, USA";
$apiKey = 'AIzaSyCl6ZAs3acu_6OovlJAlKQmocp4SgK46PM';
$url = "https://maps.googleapis.com/maps/api/directions/json?origin=".str_replace(' ', '+', $source_address)."&destination=".str_replace(' ', '+', $destination_address)."&sensor=false&key=".$apiKey;
	            $ch = curl_init();
	            curl_setopt($ch, CURLOPT_URL, $url);
	            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	            curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
	            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	            $response = curl_exec($ch);
	            curl_close($ch);
	            $response_all = json_decode($response);
	             print_r($response);exit;
	            $distance = $response_all->routes[0]->legs[0]->distance->text;*/
				$from = "Więckowskiego 72, Łódź";
				$to = "139 Carrington Road, Mount Albert, Auckland 1025, New Zealan
d";
				$apiKey = 'AIzaSyD-2vIqIwGfh0xSdNQeCNNF8XEAXMtrI1o'; 
				$from = urlencode($from);
				$to = urlencode($to);
				
				$data = file_get_contents("http://maps.googleapis.com/maps/api/distancematrix/json?origins=$from&destinations=$to&language=en-EN&sensor=false&key=$apiKey");
				$data = json_decode($data);
				
				$time = 0;
				$distance = 0;
				
				foreach($data->rows[0]->elements as $road) {
					$time += $road->duration->value;
					$distance += $road->distance->value;
				}
				
				echo "To: ".$data->destination_addresses[0];
				echo "<br/>";
				echo "From: ".$data->origin_addresses[0];
				echo "<br/>";
				echo "Time: ".$time." seconds";
				echo "<br/>";
				echo "Distance: ".$distance." meters";
?>
	<div class="container">
		<div class="row">
		              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Admission Form </h2>                  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="stud_name" name="stud_name" required  placeholder="Name" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Parent Name <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="text" id="parent_name" name="parent_name"  placeholder="Parent Name" required class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Email <span class="required">*</span></label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="email"  name="email" class="form-control col-md-7 col-xs-12" placeholder="Email" type="text" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Contact No <span class="required">*</span></label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="contact_no" name="contact_no" class="form-control col-md-7 col-xs-12" placeholder="Contact No" type="text" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Class <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="stud_class" name="stud_class" class="form-control col-md-7 col-xs-12" placeholder="Class" type="text">
                        </div>
                      </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">City <span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="city" name="city" class="form-control col-md-7 col-xs-12" placeholder="City" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender<span class="required">*</span></label>
                        <div class="col-md-12 col-sm-12 col-xs-12">
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
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Date Of Birth <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input id="datepicker-12" name="dob" class="form-control col-md-7 col-xs-12"  placeholder="mm/dd/yyyy" required type="text">
                        </div>
                      </div>
                       <div class="form-group"  id="img_val">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Upload Image <span class="required">*</span>
                        </label>
                         <div class="col-md-12 col-sm-12 col-xs-12">
                          <input type="file" onChange="upload_process(this.value);" name="uploadpicture" id="uploadpicture">
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
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Activity <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" name="activity" id="activity">
                            <option>Choose Activity</option>
                            <?php for($i=0;$i<count($row);$i++){?>
                            <option value="<?php echo $row[$i]['id'];?>"><?php echo $row[$i]['name'];?></option>
                           <?php }?>
                          </select>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         <a href ="index.php"> <button type="submit" class="btn btn-primary">Cancel</button></a>
                          <button type="button" id="save"  class="btn btn-success">Submit</button>
                        </div>
                      </div>
                   <p class="session_error_message" style="color:#d9102cc7;"></p>
                  </div>
                </div>
              </div>
            </div>
	
        </div>
       
        </section>
<?php require_once(INDEX_PATH.'footer.php');?>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

			 
