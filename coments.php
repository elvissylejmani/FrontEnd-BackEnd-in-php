<?php
include('config.php');
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $id = $_POST['id'];
    //echo "$name";
 $result = mysqli_query($conn,"INSERT INTO comentsection (Name,Text,ComID) VALUES ('$name','$message','$id')");
}
header("Location:course.php?ID=$id");
?>