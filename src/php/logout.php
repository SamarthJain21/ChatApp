<?php
  session_start();
  if(isset($_SESSION['unique_id'])){//if user logged in then
    include_once "config.php";
    $logoutID = mysqli_real_escape_string($conn, $_GET['logoutID']);
    if(isset($logoutID)){
      //set status to
      $status = "Offline Now";
      $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = '{$_GET['logoutID']}'");
      if($sql){
        session_unset();
        session_destroy();
        header("location: ../login.php");
      }else{
        header("location: ../users.php");

      }
    }else{
      header("location: ../login.php");
    }
  }else{
    header("location: ../login.php");
  }

?>
