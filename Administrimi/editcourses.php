<?php
// including the database connection file
include("../config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	$path=$_POST['name'];
    $title=$_POST['title'];
    $id=$_POST['id'];
   

	
	// checking empty fields
	if(empty($path) || empty($title)) {	
			
		if(empty($pic)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
			
	} else {
  
		//updating the table
		$result = mysqli_query($conn,"UPDATE htmlcourse SET path='$path',
        title='$title',CorsID='$id' WHERE ID=$uid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: search1.php?ID=4");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM htmlcourse WHERE ID = $uid");

while($res = mysqli_fetch_array($result))
{
	$path = $res['path'];
    $name = $res['title'];
    $id = $res['CorsID'];


}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form username="form1" method="POST" action="editcourses.php">
		<table border="0">
			<tr> 
                <td>Path</td>
                <td><input type="text" name="name" value='<?php echo $path;?>' /></td>
            </tr>
			<tr> 
				<td>title:</td>
				<td><input type="text" name="title" value='<?php echo $name;?>' /></td>
            </tr>
            </tr>
			<tr> 
				<td>Courese ID:</td>
				<td><input type="text" name="id" value='<?php echo $id;?>' /></td>
            </tr>
			<tr>
				<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
