<?php
session_start();
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
  //email opcache_invalidate
  if(filter_var($email,FILTER_VALIDATE_EMAIL )){
  //if it already exists in db
  $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
  if(mysqli_num_rows($sql)>0){
    echo "$email - This email already exists";
  }else{
    //check if user uploaded get_included_files
    if(isset($_FILES['image'])){
      $imgName = $_FILES['image']['name']; //gets user uploaded image name
      // $imgType = $_FILES['image']['type']; //gets user uploaded image type
      $tmpName = $_FILES['image']['tmp_name']; //this name is used to save file in our folder

      // explode image and get last extension like jpg jpeg
       $img_explode = explode('.',$imgName);
       $img_ext = end($img_explode);//returns extension

       $extensions = ['png', 'jpeg', 'jpg']; //supported extensions We will store
       if(in_array($img_ext, $extensions) === true){
         $time = time();//returns current time , we will use it to make image file name
         //move uploaded image to a particular folder
         $new_image_name = $time.$imgName;

         if(move_uploaded_file($tmpName, "images/".$new_image_name)){//if upload is successful
           $status = "Active now"; //after signing up his status will become "active now"
           $random_id = rand(time(), 10000000);//creates a random id:

           //insert data
           $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id , firstName, lastName, email, password, img, status )
                                                    VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_image_name}','{$status}' )");

            if($sql2){//if data inserted
              $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
              if(mysqli_num_rows($sql3)>0){
                $row = mysqli_fetch_assoc($sql3);
                $_SESSION['unique_id']= $row['unique_id'];
                echo "success";
              }else{
                echo "this email address does not exist";
              }
            }
            else {
              echo "something went wrong!";
            }

         }else{
           echo "cant upload image";
         }


       }else{
         echo "Please select an Image file - jpeg, jpg, png";
       }

    }else{
      echo "Please select an image";
    }
  }

  }else{
    echo "Invalid Email";

  }
}else{
  echo "All input fields are required";
}

?>
