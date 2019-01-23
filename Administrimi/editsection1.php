<?php
// including the database connection file
include("config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	$p1=$_POST['name1'];
    $p2=$_POST['name2'];
	$p3=$_POST['name3'];
	$p4=$_POST['name4'];
	$p5=$_POST['name5'];
	$p6=$_POST['name6'];
	$p7=$_POST['name7'];
	$p8=$_POST['name8'];

	
	// checking empty fields
	if(empty($p1) || empty($p2)) {	
			
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE section1 SET p1='$p1',p2='$p2',p3='$p3',p4='$p4,p5='$p5',p6='$p6',p7='$p7',p8='$p8' WHERE Sec_ID = $uid");
//	echo "$p4";	
		//redirectig to the display ppassword. In our case, it is admin.php
        header("Location: search1.php?ID=6");
	}
}
?>
<?php
//getting uid from url
$uid = 1;

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM section1 WHERE Sec_ID = $uid");
while($res = mysqli_fetch_array($result))
{
    $p1 = $res['p1'];
    $p2= $res['p2'];
    $p3 = $res['p3'];
    $p4 = $res['p4'];
    $p5 = $res['p5'];
    $p6 = $res['p6'];
    $p7 = $res['p7'];
    $p8 = $res['p8'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<br/><br/>
	
	<form username="form1" method="post" action="editsection1.php">
		<table border="0">
			<tr> 
				<td>Text</td>
				<td><input type="text" name="name1" value='<?php echo $p1;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name2" value='<?php echo $p2;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name3" value='<?php echo $p3;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name4" value='<?php echo $p4;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name5" value='<?php echo $p5;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name6" value='<?php echo $p6;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name7" value='<?php echo $p7;?>' /></td>
			</tr>
            <tr> 
				<td>Text</td>
				<td><input type="text" name="name8" value='<?php echo $p8;?>' /></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
