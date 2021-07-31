<?php
 session_start();
 include_once "config.php";
 $outgoingID = $_SESSION['unique_id'];
 $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id ={$outgoingID}");
 $output = "";

 if(mysqli_num_rows($sql) == 1){
   $output = "no other user available to chat";
 }
 else if(mysqli_num_rows($sql)>1){
   include "data.php";
 }
 else{
   $output = "something went wrong";
 }
 echo $output;
?>
