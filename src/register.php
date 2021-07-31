<?php
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}
include_once "header.php";
?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Realtime Chat App</header>
      <form action="#" enctype="multipart/form-data">
        <div class="error-txt"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name" required>
          </div>
        </div>

          <div class="field input">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" required>
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required>
            <i class="fa fa-eye"></i>

          </div>
          <div class="field image">
            <label>Select Image</label>
            <input type="file" name="image" required>
          </div>
          <div class="field button">
            <input type="submit" name="Submit" value="Continue to chat">
          </div>
      </form>
      <div class="link">
        Already Signed Up?
        <a href="login.php">Login Now</a>
      </div>
    </section>

  </div>
  <script type="text/javascript" src="./js/password-show.js"></script>
  <script type="text/javascript" src="./js/signup.js"></script>

</body>

</html>
