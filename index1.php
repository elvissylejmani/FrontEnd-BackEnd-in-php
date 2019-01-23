<?php
include('login.php');
if ((isset($_SESSION['username'])!= '')) {
  header('Location: home.php');
}

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<div align="left">
  <h4>PHP login Form with session - MySQLi Procedural</h4>
  <div class="loginBox">
    <form class="" action="" method="post">
      <label>Username:</label>
      <input type="text" name="username" placeholder="username" > <br> <br>
      <label>Password: </label>
      <input type="password" name="password" placeholder="password"> <br> <br>
      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <input type="submit" name="submit" value="login">
    </form>
    <div class="error">
<?php echo $error; ?>
    </div>
    <a href="../index.php" style="font-size:18px">Home</a> <br> <br>
  </div>
</div>
  </body>
</html>
