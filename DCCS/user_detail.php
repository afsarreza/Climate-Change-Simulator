

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
 
  
    

    $country = $_POST['country'];
   

    $age = $_POST['Age'];
  //  $age  = mysql_real_escape_string($age);


   $gender = $_POST['gender'];
    //$gender  = mysql_real_escape_string($gender);
//    echo $gender;

   

    $education = $_POST['edu'];
   // $education = mysql_real_escape_string($education);

     $major = $_POST['major'];

     $email = $_POST['email'];
    
    
    //$sql = "INSERT INTO user_detail(age,sex,country,education,major) VALUES ($age','$gender','$country',$education','$major')";

  
    //$db->query($sql);
     $sql = "INSERT INTO user_detail(email,age,sex,country,education,major) VALUES ('$email', '$age','$gender','$country','$education','$major')";
    $result=mysqli_query($db,$sql);
    if($result){
    	echo "submitted";}
    mysqli_close($db);
   
 ?>
 

