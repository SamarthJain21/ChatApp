<?php
session_start();
if(isset($_SESSION['unique_id'])){
  header("location: users.php");
}
include_once "header.php";
?>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#">
        <div class="error-txt"></div>

          <div class="field input">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
          </div>
          <div class="field input">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password">
            <i class="fa fa-eye"></i>
          </div>
          <div class="field button">
            <input type="submit" name="Submit" value="Continue to chat">
          </div>
      </form>
      <div class="link">
        Dont have an account?
        <a href="register.php">Sign up Now</a>
      </div>
    </section>

  </div>
  <script type="text/javascript" src="./js/password-show.js"></script>
  <script type="text/javascript" src="./js/login.js"></script>


</body>

</html>
