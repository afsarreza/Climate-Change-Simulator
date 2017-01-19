<?php

$db= mysqli_connect('localhost','root','123','DCCS');

if(!$db){
    die('Could not connect:'.mysqli_error($db));
   
}

?>