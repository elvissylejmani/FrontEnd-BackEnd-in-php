<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"SELECT * FROM users ORDER BY uid DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<form action="" method="post">  
Search username or email: <input type="text" name="term" /> 
<input type="submit" value="Search" />  
</form> 
<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>username</td>
		<td>password</td>
		<td>Email</td>
		<td>Update</td>
	</tr> 
<?php
if (!empty($_REQUEST['term'])) {
$term = mysqli_real_escape_string
($conn,$_REQUEST['term']);     
$sql = mysqli_query($conn,
"SELECT * FROM admin1 
WHERE username LIKE '%".$term."%'"); 
while($row = mysqli_fetch_array($sql)) { 		
		echo "<tr>";
		echo "<td>".$row['username']."</td>";
		echo "<td>".$row['password']."</td>";
		echo "<td><a href=\"edit.php?uid=$row[AID]\">
		Edit</a> | <a href=\"delete.php?uid=$row[AID]\"
		onClick=\"return confirm('Are you sure you want to delete?')\">
		Delete</a></td></tr>";		
	}

}

?>
	</table>
</body>
</html>
