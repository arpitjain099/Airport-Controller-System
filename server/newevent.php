<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","root","","tindrella");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }
  $flightcode=$_POST['flightcode'];
  $datetimepicker_val=$_POST['datetimepicker_val'];
  $departingairportval=$_POST['departingairportval'];
  $arrivalairportval=$_POST['arrivalairportval'];
  $controller=$_POST['controller'];
  $lane=$_POST['lane'];
  $typeofevent=$_POST["typeofevent"];
  $duration=$_POST['duration'];
  $unixtimestamp=$_POST['unixtimestamp'];
  
  $post_starting_timestamp=$unixtimestamp/1000;
  $post_ending_timestamp=$post_starting_timestamp+($duration*60);



//$result2 = mysqli_query($con,"INSERT INTO `flightdata` VALUES('$flightcode','$datetimepicker_val','$departingairportval','$arrivalairportval','$controller','$lane','$typeofevent','$duration');");

  
  $start_timestamp=(($unixtimestamp))/1000;
  $end_timestamp=$start_timestamp+($duration*60);

  //logic flows from here
  //lane logic
  
  $result = mysqli_query($con,"SELECT * FROM `controllerassignment` WHERE lane='$lane'");
  $flag_lane=0;
  if($result->num_rows > 0){
 while($row = $result->fetch_assoc()) {
     
       
      if($row['starting_timestamp'] <= $post_ending_timestamp && $row['ending_timestamp'] >= $post_starting_timestamp)
      {
        $flag_lane=1;break;
      }

     }
   }
   if($flag_lane==1){echo "Lane already occupied during this time period. Please try again.";return;   }
     

    //controller logic
    $result = mysqli_query($con,"SELECT * FROM `controllerassignment`");
  $flag_controller=0;$arr=array();
  if($result->num_rows > 0){
 while($row = $result->fetch_assoc()) {
      if($row['starting_timestamp'] <= $post_ending_timestamp && $row['ending_timestamp'] >= $post_starting_timestamp)
      {
        
      $listofcontrollers_server = explode(',', $row['controllerid']);
      $listofcontrollers_post=explode(',', $controller);
      
      for($i=0;$i<count($listofcontrollers_server);$i++)
        for($j=0;$j<count($listofcontrollers_post);$j++)
          if($listofcontrollers_server[$i]==$listofcontrollers_post[$j])
        { 
          $flag_controller=1;
          array_push($arr, $listofcontrollers_server[$i]);
        }
      }

     }
   }
if($flag_controller==1){
  echo "The following controllers were found to be assigned elsewhere: ";
for($i=0;$i<count($arr);$i++)
if($i==count($arr)-1)
  echo $arr[$i];
else echo $arr[$i].",";
echo ". Please try again. ";
return;   
}
    
//flight logic
  $result = mysqli_query($con,"SELECT * FROM `controllerassignment`");
  $flag_flight=0;
  if($result->num_rows > 0){
 while($row = $result->fetch_assoc()) {
      if($row['starting_timestamp'] <= $post_ending_timestamp && $row['ending_timestamp'] >= $post_starting_timestamp)
      { if($row['flightcode']==$flightcode)
        $flag_flight=1;
    
      
    
      }

     }
   }
if($flag_flight==1){
  echo "The selected flight already has a planned schedule within the time frame selected. "; return;   
}







else{
  $result2 = mysqli_query($con,"INSERT INTO `controllerassignment` VALUES('$controller','$lane','$start_timestamp','$end_timestamp','$flightcode');");
    $result2 = mysqli_query($con,"INSERT INTO `flightdata` VALUES('$flightcode','$datetimepicker_val','$departingairportval','$arrivalairportval','$controller','$lane','$typeofevent','$duration','$unixtimestamp');");
if($result2){
echo "Data successfully entered into the system.";return;
}
else {
echo "Some error occurred. Please try again. Apologies for the inconvenience.";return;}
}
?>