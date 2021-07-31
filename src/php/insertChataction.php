<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $incomingID = mysqli_real_escape_string($conn, $_POST['incomingID']);
    $outgoingID = $_SESSION['unique_id'];
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    if(!empty($message)){
      $sql = mysqli_query($conn, "INSERT INTO messages (incomingMessageID , outgoingMessageID , message)
      VALUES('{$incomingID}', '{$outgoingID}','{$message}')") or die();
    }
  }else{
    header("../login.php");
  }
?>
