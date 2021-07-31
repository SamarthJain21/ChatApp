<?php
  $conn = mysqli_connect("localhost","root","password","chatApp");
  if(!$conn){
    echo  mysqli_connect_error();
  }

?>
