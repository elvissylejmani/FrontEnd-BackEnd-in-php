<?php
// including the database connection file
include("../config.php");

if(isset($_POST['update']))
{	
	$uid = $_POST['uid'];
	$name=$_POST['name'];
    $title=$_POST['title'];
    $category=$_POST['Category'];
    $pic = addslashes(file_get_contents($_FILES['userfile']['tmp_name']));
    $maxsize = 10000000; //set to approx 10 MB

	
	// checking empty fields
	if(empty($pic) || empty($name)) {	
			
		if(empty($pic)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
			
	} else {
  
		//updating the table
		$result = mysqli_query($conn,"UPDATE courses SET pic='$pic',
        name='$name',title='$title',Category='$category' WHERE ID=$uid");
		
		//redirectig to the display ppassword. In our case, it is admin.php
		header("Location: search1.php?ID=2");
	}
}
?>
<?php
//getting uid from url
$uid = $_GET['uid'];

//selecting data associated with this particular uid
$result = mysqli_query($conn,"SELECT * FROM courses WHERE ID = $uid");

while($res = mysqli_fetch_array($result))
{
	$pic = $res['pic'];
    $name = $res['name'];
    $title = $res['title'];
    $category = $res['Category'];


}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="admin.php">Home</a>
	<br/><br/>
	
	<form enctype="multipart/form-data" username="form1" method="POST" action="edit1.php">
		<table border="0">
			<tr> 
                <td>Picture</td>
                <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
				<td><?php echo '<img src="data:image/jpg;base64,' . base64_encode($pic) . '" style="height:20%; witdh:20%;" >'?></td>
                <td><input type="file" name="userfile"></td>
            </tr>
			<tr> 
				<td>Name:</td>
				<td><input type="text" name="name" value='<?php echo $name;?>' /></td>
            </tr>
            </tr>
			<tr> 
				<td>Title:</td>
				<td><input type="text" name="title" value='<?php echo $title;?>' /></td>
            </tr>
            <tr> 
				<td>Category:</td>
				<td><input type="text" name="Category" value='<?php echo $category;?>' /></td>
            </tr>
            
            
			<tr>
				<td><input type="hidden" name="uid" value='<?php echo $_GET['uid'];?>' /></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
