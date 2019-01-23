<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include("config.php");

if(isset($_POST['Submit'])) {	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password1 = $_POST['password1'];
		
	// checking empty fields
	if(empty($username) || empty($password) || empty($password1)) {
				
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>password field is empty.</font><br/>";
		}
		
		if(empty($password1)) {
			echo "<font color='red'> password field is empty.</font><br/>";
		}
		
		//link to the previous password
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		if ($password != $password1) {
			echo "<font color='red'> password field is empty.</font><br/>";
		}
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO admin1(username,password) 
		VALUES('$username','$password')");
		//display success messpassword
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='admin.php'>View Result</a>";
	}
}
?>
</body>
</html>
