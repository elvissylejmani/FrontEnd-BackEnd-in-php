<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$uid = $_GET['uid'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE FROM admin1 WHERE AID=$uid");

//redirecting to the display page (index.php in our case)
header("Location: search1.php?ID=1");
?>

