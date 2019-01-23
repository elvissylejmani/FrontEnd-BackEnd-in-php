<?php
include("check.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <h3 class="hello"style="text-align:right">Hello, <em><?php echo $login_user; ?>!</em> </h3>
<br> <br> <br>
<a href="../usr/admin.php" style="font-size:18px" > users</a> <br>
<a href="../Dep/admin.php" style="font-size:18px" > Departamenti </a><br>
<a href="../Std-foto/admin.php" style="font-size:18px">Students</a><br>
<a href="logout.php" style="font-size:18px" >logout</a>
   </body>
 </html>
