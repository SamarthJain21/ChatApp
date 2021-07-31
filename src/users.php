<?php
session_start();
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}
include_once "header.php";
?>

<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <?php
        include_once "php/config.php";
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$_SESSION['unique_id']}'");
        if(mysqli_num_rows($sql)>0){
          $row = mysqli_fetch_assoc($sql);
        }
        ?>
        <div class="content">
          <img src="php/images/<?php echo $row['img']?>" alt="">
          <div class="details">
            <span><?php echo $row['firstName']." ".$row['lastName'] ?></span>
            <p><?php echo $row['status'] ?></p>
          </div>
        </div>
        <a href="php/logout.php?logoutID=<?php echo $row['unique_id'] ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select a person to start chat</span>
        <input type="text" name="searchName" placeholder="Enter name to search">
        <button><i class="fa fa-search"></i></button>
      </div>
      <div class="users-list">


      </div>
    </section>

  </div>
  <script type="text/javascript" src="./js/users.js"></script>

</body>

</html>
