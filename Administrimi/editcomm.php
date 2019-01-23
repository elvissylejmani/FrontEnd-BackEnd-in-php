<?php
// including the database connection file
include("config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	
	$name=$_POST['name'];
	$text=$_POST['text'];
	$id=$_POST['ID'];
	
	// checking empty fields
	if(empty($name) || empty($text)) {	
			
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
			
	} else {	
		//updating the table
		$result = mysqli_query($conn,"UPDATE comentsection SET Text='$text',name='$name',ComID='$id' WHERE CID=$uid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: search1.php?ID=5");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM comentsection WHERE CID = $uid");

while($res = mysqli_fetch_array($result))
{
	$name = $res['Name'];
    $text = $res['Text'];
    $commId = $res['ComID'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form username="form1" method="post" action="editcomm.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="name" value='<?php echo $name;?>' /></td>
			</tr>
			<tr> 
				<td>Text</td>
				<td><input type="text" name="text" value='<?php echo $text;?>' /></td>
			</tr>
            <tr> 
				<td>ID</td>
				<td><input type="text" name="ID" value='<?php echo $commId;?>' /></td>
			</tr>
			<tr>
				<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
