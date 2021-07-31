<?php
while($row = mysqli_fetch_assoc($sql)){
  $sql2 = "SELECT * FROM messages WHERE (incomingMessageID = {$row['unique_id']}
                OR outgoingMessageID = {$row['unique_id']}) AND (outgoingMessageID = {$outgoingID}
                OR incomingMessageID = {$outgoingID}) ORDER BY messageID DESC LIMIT 1";
  $query2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_assoc($query2);
  if(mysqli_num_rows($query2)>0){
    $result = $row2['message'];
  }else{
    $result = "Start a conversation";
  }
  //trimming the message
  (strlen($result)>15)? $msg = substr($result , 0 , 15)." ..." : $msg = $result;
  //is the last message was sent by you or not
  ($outgoingID == $row2['outgoingMessageID'])? $you = "You: ": $you = "";
  //activity status
  ($row['status'] =="Offline now")? $offline ="offline" : $offline = "";
  $output .='<a href="chat.php?userID='.$row['unique_id'].'">
            <div class="content">
              <img src="php/images/'. $row['img'] .'" alt="">
              <div class="details">
                <span>'. $row['firstName'] ." ". $row['lastName'] .'</span>
                <p>'. $you . $msg.'</p>
              </div>
            </div>
            <div class="status-dot '.$offline.'">
              <i class="fa fa-circle"></i>
            </div>
          </a>';
}


?>
