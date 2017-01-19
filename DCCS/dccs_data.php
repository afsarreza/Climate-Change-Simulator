
<?php 

//echo "yes";

   //require_once 'db_connect.php';
   $servername = "localhost";
	$username = "root";
	$password = "123";
	$dbname = "DCCS";
   $db= mysqli_connect($servername, $username, $password, $dbname);
   //echo "Connected";

if(!$db){
    die('Could not connect:'.mysqli_error($db));
   echo "error";
    }
   // mysqli_select_db($db,"DCCS");
    $emission = $_POST['emission_value'];
     $goal = $_POST['goal']; 
     $year = $_POST['xVal'];

    $absorption = $_POST['absorption_value'];


   $totalCarbonDioxideConc = $_POST['totalCarbonDioxideConc'];
   $temperature = $_POST['temperature'];
    //$sqlid = "SELECT max(Id) FROM user_detail";
    //$id = mysqli_query($sqlid,$db);
    //echo "$id";

    //$sqlemail = 'SELECT email FROM user_detail WHERE Id = 1';
    //$email = mysqli_query($db,$sqlemail);
    //echo "$email";
    $sql = "INSERT INTO dccs_data(email,year,goal,emission,absorption,total_carbon_con,temperature) VALUES ('afsar.reza1409@gmail.com','$year' ,'$goal','$emission','$absorption','$totalCarbonDioxideConc','$temperature')";

    //$db->query($sql);
    $result=mysqli_query($db,$sql);
    mysqli_close($db);
   
 ?>
