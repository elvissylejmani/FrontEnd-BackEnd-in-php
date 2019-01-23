<?php
include('config.php');
session_start();
$sakta = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>

    <?php 
$results = mysqli_query($conn,"SELECT * FROM quiz");
if(mysqli_num_rows($results) > 0)
{
    while($row = mysqli_fetch_array($results))
    {
        extract($row);
        ?>
        <p><?php echo $Pytja ?></p>
        <form action="" method="POST">
<input type="radio" name="pergj" value="<?php echo $row['Opsioni 1'] ?>"><?php echo $row['Opsioni 1'] ?> <br>
<input type="radio" name="pergj" value="<?php echo $row['Opsioni 2'];?>"><?php echo $row['Opsioni 2'] ?> <br>
<input type="radio" name="pergj" value="<?php echo $row['Opsioni 3'] ?>"><?php echo $row['Opsioni 3'] ?> <br>
<input type="radio" name="pergj" value="<?php echo $row['Opsioni 4'] ?>"><?php echo $row['Opsioni 4'] ?> <br>
<input type="submit" name="submit" value="Submit" >
</form>
<hr>
<?php 
if (isset($_POST['submit'])) {
$pergj=$_POST['pergj'];
//echo $pergj;
if ($pergj == $Esakt) {
    $sakta++;
    echo $sakta;

}
else echo "Gabim";

}
?>

    <?php
     } 
    }
    ?>
   
<?php  echo $sakta; ?>

</body>
</html>