
<?php
  session_start();
  if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $incomingID = mysqli_real_escape_string($conn, $_POST['incomingID']);
    $outgoingID = $_SESSION['unique_id'];
    $output= "";

    $sql="SELECT * FROM messages
    LEFT JOIN users ON users.unique_id = messages.outgoingMessageID
     WHERE (outgoingMessageID = '{$outgoingID}' AND incomingMessageID = '{$incomingID}')
    OR (outgoingMessageID = '{$incomingID}' AND incomingMessageID = '{$outgoingID}') ORDER BY messageID";
    $query = mysqli_query($conn, $sql);
    if(mysqli_num_rows($query)>0){
      while($row = mysqli_fetch_assoc($query)){
        if($row['outgoingMessageID']==$outgoingID){//if it equals then he is the message sender
          $output .='<div class="chat outgoing">
                    <div class="details">
                      <p class="message">'.$row['message'].'</p>
                    </div>
                  </div>';
        }else{//he is the message receiver
          $output .=' <div class="chat incoming">
                      <img src="php/images/'.$row['img'].'" alt="">
                      <div class="details">
                        <p>'.$row['message'].'</p>
                      </div>
                  </div>';

        }
      }
      echo $output;
    }
  }else{
    header("../login.php");
  }
?>
