<?php 


   $servername = "localhost";
	$username = "root";
	$password = "sairam321"; 
	$dbname = "mtp";
   $db= mysqli_connect($servername,$username,$password,$dbname); 
   //echo "Connected"; 

if(!$db){
    die('Could not connect:'.mysqli_error($db));
   echo "error";
    }
    else {
    	echo "conn";} 
      
   //mysqli_select_db($db,"mtp");
    $emissionx = $_POST['arrayex'];
    $emissiony = $_POST['arrayey'];
    $absx = $_POST['arrayax'];
    $absy = $_POST['arrayay'];
    $feedback = $_POST['feedback'];
  //  $name = mysql_real_escape_string($name);
//echo $emissionx."hello" ;
  //      print_r($emissionx);
    $sql = "INSERT INTO POINTS (EMISSIONX,EMISSIONY,ABSORPTIONX,ABSORPTIONY,FEEDBACK) VALUES ('$emissionx','$emissiony','$absx','$absy','$feedback')";


    //$db->query($sql);
    $result=mysqli_query($db,$sql);
    if($result){
    	echo "submitted";}
    mysqli_close($db); 

     
  //  $name = mysql_real_escape_string($name);
    
   
 ?>
 
