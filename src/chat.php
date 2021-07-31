<?php
session_start();
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
include_once "header.php";
?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php
          include_once "php/config.php";
          $userID = mysqli_real_escape_string($conn, $_GET['userID']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$userID}'");
          if(mysqli_num_rows($sql)>0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fa fa-arrow-left"></i></a>
          <img src="php/images/<?php echo $row['img']?>" alt="">
          <div class="details">
            <span><?php echo $row['firstName']." ".$row['lastName'] ?></span>
            <p><?php echo $row['status'] ?></p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <form class="typing-area" action="#" autocomplete="off">
        <input type="text" name="incomingID" value="<?php echo $userID ?>" hidden>
        <input type="text" name="message" value="" class="input-field" placeholder="Type your message here...">
        <button type="button" name="button"> <i class=" fa fa-paper-plane"></i></button>

      </form>
    </section>

  </div>
  <script type="text/javascript" src="js/chat.js">

  </script>
</body>

</html>
