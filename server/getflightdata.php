<?php 
header('Access-Control-Allow-Origin: *');

$con=mysqli_connect("localhost","root","","tindrella");
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
    echo "<br />";
  }

  $t=array();
$flightcode=$_POST['flightcode'];
$result = mysqli_query($con,"SELECT * FROM `flightdata` WHERE flightcode='$flightcode'");
   if($result->num_rows > 0){
 
     
     while($row = $result->fetch_assoc()) {
     
       
       array_push($t,$row);
     }
     echo json_encode($t);
   }

else{
  echo json_encode($t);


}

?>