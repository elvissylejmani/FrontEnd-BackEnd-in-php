<?php
include('check.php');

 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>HTML Education Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>

		<!-- Header -->
		<header id="header">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a class="logo" href="index.php">
							<img src="./img/log.png" alt="logo">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Mobile toggle -->
					<button class="navbar-toggle">
						<span></span>
					</button>
					<!-- /Mobile toggle -->
				</div>

				<!-- Navigation -->
				<nav id="nav">
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="blog.php?ID=1">Courses</a></li>
						<li><a href="contact.php">User</a></li>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/foto.jpeg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Home</a></li>
							<li>Contact</li>
						</ul>
						<h1 class="white-text">Get In Touch</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Contact -->
		<div id="contact" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
			
                <?php
					$id = $_GET['ID'];
//including the database connection file
include_once("config.php");


					
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Add New Data</a><br/><br/>

	<form action="" method="post">  
Search: <input type="text" name="term" /> 
<input type="submit" value="Search" />  
</form> 
<?php
if($id == 1){
	?>
<table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>username</td>
		<td>password</td>
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
<?php
}
else if($id == 2)
{
	?><table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Course</td>
		<td>Picture</td>
		<td>Category</td>
		<td>Update</td>
	</tr>
	<?php

	if (!empty($_REQUEST['term'])) {
	$term = mysqli_real_escape_string
	($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,
	"SELECT * FROM courses 
	WHERE title LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['title']."</td>";
			echo'<td> <img src="data:image/jpg;base64,' . base64_encode($row['pic']) . '" style="height:20%; witdh:20%;" > </td>'; 
			echo "<td>" .$row['Category']."</td>";
			echo "<td><a href=\"edit1.php?uid=$row[ID]\">
			Edit</a> | <a href=\"delete1.php?uid=$row[ID]\"
			onClick=\"return confirm('Are you sure you want to delete?')\">
			Delete</a></td></tr>";		
		}
	
	}

	
}
else if($id == 3)
{
	?><table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Picture</td>
		<td>Title</td>
		<td>Paragraph</td>
		<td>Start</td>
		<td>Update</td>

	</tr>
	<?php

	if (!empty($_REQUEST['term'])) {
	$term = mysqli_real_escape_string
	($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,
	"SELECT * FROM header 
	WHERE P1 LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
			echo'<td> <img src="data:image/jpg;base64,' . base64_encode($row['pic']) . '" style="height:20%; witdh:20%;" > </td>'; 
			echo "<td>".$row['P1']."</td>";
			echo "<td>".$row['P2']."</td>";
			echo "<td>" .$row['P3']."</td>";
			echo "<td><a href=\"edit1.php?uid=$row[ID]\">
			Edit</a> | <a href=\"delete2.php?uid=$row[ID]\"
			onClick=\"return confirm('Are you sure you want to delete?')\">
			Delete</a></td></tr>";		
		}
	
	}

	
}
else if($id == 4)
{
	?><table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Video linkd</td>
		<td>Title</td>
		<td>ID</td>
		<td>Update</td>

	</tr>
	<?php

	if (!empty($_REQUEST['term'])) {
	$term = mysqli_real_escape_string
	($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,
	"SELECT * FROM htmlcourse 
	WHERE title LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
		//	echo'<td> <img src="data:image/jpg;base64,' . base64_encode($row['pic']) . '" style="height:20%; witdh:20%;" > </td>'; 
			echo "<td>".$row['path']."</td>";
			echo "<td>".$row['title']."</td>";
			echo "<td>" .$row['CorsID']."</td>";
			echo "<td><a href=\"editcourses.php?uid=$row[ID]\">
			Edit</a> | <a href=\"delete1.php?uid=$row[ID]\"
			onClick=\"return confirm('Are you sure you want to delete?')\">
			Delete</a></td></tr>";		
		}
	
	}

	
}
else if($id == 5)
{
	?><table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Name</td>
		<td>Text</td>
		<td>ComID</td>
		<td>Update</td>

	</tr>
	<?php

	if (!empty($_REQUEST['term'])) {
	$term = mysqli_real_escape_string
	($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,
	"SELECT * FROM comentsection 
	WHERE Name LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
		//	echo'<td> <img src="data:image/jpg;base64,' . base64_encode($row['pic']) . '" style="height:20%; witdh:20%;" > </td>'; 
			echo "<td>".$row['Name']."</td>";
			echo "<td>".$row['Text']."</td>";
			echo "<td>" .$row['ComID']."</td>";
			echo "<td><a href=\"editcomm.php?uid=$row[CID]\">
			Edit</a> | <a href=\"delete1.php?uid=$row[CID]\"
			onClick=\"return confirm('Are you sure you want to delete?')\">
			Delete</a></td></tr>";		
		}
	
	}

	
}
else if($id == 6)
{
	?><table width='80%' border=0>
	<tr bgcolor='#CCCCCC'>
		<td>Title</td>
		<td>AfterTitle</td>
		<td>Text</td>
		<td>Text</td>
		<td>Text</td>
		<td>Text</td>
		<td>Text</td>
		<td>Text</td>
		<td>Update</td>


	</tr>
	<?php

	if (!empty($_REQUEST['term'])) {
	$term = mysqli_real_escape_string
	($conn,$_REQUEST['term']);     
	$sql = mysqli_query($conn,
	"SELECT * FROM section1 
	WHERE p1 LIKE '%".$term."%'"); 
	while($row = mysqli_fetch_array($sql)) { 		
			echo "<tr>";
		//	echo'<td> <img src="data:image/jpg;base64,' . base64_encode($row['pic']) . '" style="height:20%; witdh:20%;" > </td>'; 
		echo "<td>" .$row['p1']."</td>";
		echo "<td>" .$row['p2']."</td>";
		echo "<td>" .$row['p3']."</td>";
		echo "<td>" .$row['p4']."</td>";
		echo "<td>" .$row['p5']."</td>";
		echo "<td>" .$row['p6']."</td>";
		echo "<td>" .$row['p7']."</td>";
		echo "<td>" .$row['p8']."</td>";
			echo "<td><a href=\"editsection1.php?uid=$row[Sec_ID]\">
			Edit</a> | <a href=\"delete1.php?uid=$row[Sec_ID]\"
			onClick=\"return confirm('Are you sure you want to delete?')\">
			Delete</a></td></tr>";		
		}
	
	}

	
}

?>
	</table>
</body>
</html>

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Contact -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.html">
								<img src="./img/log.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<div class="col-md-6">
						<ul class="footer-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="blog.html?ID=1">Courses</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

				</div>
				<!-- /row -->

				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					<div class="col-md-4 col-md-push-8">
						<ul class="footer-social">
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
							<li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
					<!-- /social -->

					<!-- copyright -->
					<div class="col-md-8 col-md-pull-4">
						<div class="footer-copyright">
							<span>&copy; Copyright 2018. All Rights Reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com">Colorlib</a></span>
						</div>
					</div>
					<!-- /copyright -->

				</div>
				<!-- row -->

			</div>
			<!-- /container -->

		</footer>
		<!-- /Footer -->

		<!-- preloader -->
		<div id='preloader'><div class='preloader'></div></div>
		<!-- /preloader -->


		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
		<script type="text/javascript" src="js/google-map.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
