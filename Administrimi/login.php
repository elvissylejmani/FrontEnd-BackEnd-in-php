<?php
session_start();
include("config.php");
$error = "";
$error1 = "";
if (isset($_POST["submit"])) {
  if (empty($_POST["username"]) || empty($_POST["password"]) ) {
    $error = "both fields are required";
  }
  else {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql = "SELECT AID FROM admin1 WHERE username='$username'
     and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
      $_SESSION['username'] = $username;

    }else {
      $error = "Incorrect username or password";

    }
  }
}
else {
  if (isset($_POST['submit1'])) {
    $username1 = $_POST['username1'];
    $password1= $_POST['password1'];
    $password2 = $_POST['password2'];
    if (empty($username1)|| empty($password1)||empty($password2)) {
      if (empty($username1)){
        $error1 = "Username field is not set";
      }
     else if(empty($password1)) {
        $error1 = "Password is not set";
      }
      else if(empty($password2)) {
        $error1 = "The second Password is not set";
      }
    }
    else if($password1 != $password2) {
      $error1 = "the two passwords do not match";
    }
    else if(strlen($username1) < 6 || strlen($password1) < 6){
      $error1 = "The password and username should be longer than 6";
    }
    else{
      $result = mysqli_query($conn, "INSERT INTO user(username,password) VALUES ('$username1','$password1')");
      
     
     $result1=mysqli_query($conn,"SELECT id_user FROM user WHERE username='$username1' and password='$password1'");
     $row=mysqli_fetch_array($result1,MYSQLI_ASSOC);
       $_SESSION['username'] = $username1;
 
    
    }

  }
}

 ?>
