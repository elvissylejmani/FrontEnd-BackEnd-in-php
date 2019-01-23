<?php
// including the database connection file
include("config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	// checking empty fields
	if(empty($username) || empty($password)) {	
			
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE admin1 SET username='$username',password='$password' WHERE AID=$uid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: search1.php");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM admin1 WHERE AID = $uid");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$password = $res['password'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form username="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>username</td>
				<td><input type="text" name="username" value='<?php echo $username;?>' /></td>
			</tr>
			<tr> 
				<td>password</td>
				<td><input type="text" name="password" value='<?php echo $password;?>' /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
