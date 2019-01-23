<?php 
include('config.php');
include('login.php');
if (!(isset($_SESSION['username'])!= '')) 
	header('Location: contact.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Kos-courses</title>

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
		<header id="header" class="transparent-nav">
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
						<?php if (!(isset($_SESSION['username'])!= '')) { ?>
						<li><a href="contact.php">Login</a></li>
						<?php } else {
							?><li><a href="logout.php" >logout</a>
							</li>
							<?php
						}
						?>
												<li><a href="contact.php"> Admin list </a></li>

					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->
		<?php 
		            //  $conn = mysqli_connect("localhost","root","","projekti") or die ("Connection faild");
					 	$query = "SELECT * FROM header ORDER BY ID DESC limit 1";
						$result = mysqli_query($conn, $query);
						while($row = mysqli_fetch_array($result))
						{
							extract($row);
					
					?>
		<!-- Home -->
		<div id="home" class="hero-area">

	
			<!-- Backgound Image -->
			<?php echo '<div class="bg-image bg-parallax overlay"  style="background-image: url(data:image/jpg;base64,'. base64_encode($pic) .')"></div>'?>
			<!-- /Backgound Image -->

			<div class="home-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<h1 class="white-text"><?php echo "$P1"?></h1>
							<p class="lead white-text"><?php echo "$P2";?></p>
							<a class="main-button icon-button" href="blog.php?ID=1"><?php echo "$P3"?></a>
							<?php
						}
						?>
						</div>
					</div>
				</div>
				<form enctype="multipart/form-data" method="post" action="1.php" name='form1'>
				<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
Picture: <input name="userfile" type="file" />
Title: <input type="text" name="title">
Text: <input type="text" name="text">
Text2: <input type="text" name="text2">
<input type="submit" name="submit" value="submit">

</form>
<h1>Edit or delete:</h1>
<a href="search1.php?ID=3">
<input type="submit" name="edit" value="Edit or Delete">
</a>
			</div>

		</div>
		<!-- /Home -->

		<!-- About -->
		<div id="about" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">
				
<?php
$query = "SELECT * FROM section1 ORDER BY Sec_ID DESC limit 1";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
extract($row);



?>
					<div class="col-md-6">
						<div class="section-header">
							<h2><?php echo "$p1";?></h2>
							<p class="lead"><?php echo "$p2";?></p>
						</div>

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-flask"></i>
							<div class="feature-content">
								<h4><?php echo "$p3";?> </h4>
								<p><?php echo "$p4";?> </p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-users"></i>
							<div class="feature-content">
								<h4><?php echo "$p5";?></h4>
								<p><?php echo "$p6";?></p>
							</div>
						</div>
						<!-- /feature -->

						<!-- feature -->
						<div class="feature">
							<i class="feature-icon fa fa-comments"></i>
							<div class="feature-content">
								<h4><?php echo "$p7";?></h4>
								<p><?php echo "$p8";?>/p>
							</div>
						</div>
						<!-- /feature -->

					</div>

					<div class="col-md-6">
						<div class="about-img">
					<?php echo '<img src="data:image/jpg;base64,' . base64_encode($pic) . '" alt="">';?>
						</div>
						
					</div>
					<form enctype="multipart/form-data" method="post" action="1.php" name='form1'>
					<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
Picture: <input name="userfile" type="file" />
Title: <input type="text" name="title">
AfterTitle: <input type="text" name="text">
Text: <input type="text" name="text1">
Text: <input type="text" name="text2">
Text: <input type="text" name="text3">
Text: <input type="text" name="text4">
Text: <input type="text" name="text5">
Text: <input type="text" name="text6">

<input type="submit" name="submit1" value="submit">
</form>
<?php
}
?>
					</div>
				<!-- row -->

			</div>
			<!-- container -->
		</div>
		<!-- /About -->
		<h1>Edit or delete:</h1>
<a href="search1.php?ID=6">
<input type="submit" name="edit" value="Edit or Delete">
</a>
		<!-- Courses -->
		<div id="courses" class="section">

			<!-- container -->
			<div class="container">

			

				<!-- courses -->
				<div id="courses-wrapper">

					<!-- row -->
					<div class="row">

						<!-- single course -->
				<!--		<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course01.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Beginner to Pro in Excel: Financial Modeling and Valuation</a>
								<div class="course-details">
									<span class="course-category">Business</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
						<!--
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course02.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Introduction to CSS </a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
					<!--	<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course03.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Ultimate Drawing Course | From Beginner To Advanced</a>
								<div class="course-details">
									<span class="course-category">Drawing</span>
									<span class="course-price course-premium">Premium</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

			<!--			<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course04.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">The Complete Web Development Course</a>
								<div class="course-details">
									<span class="course-category">Web Development</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

					<!-- row -->
					<div class="row">
					<?php
$query = "SELECT * FROM courses ORDER BY ID	DESC LIMIT 8";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	extract($row);



?>
						<!-- single course -->
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="course.php?ID=<?php echo $ID ?>" class="course-img">
					<?php echo '<img src="data:image/jpg;base64,' . base64_encode($pic) . '" >'?>
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#"><?php echo "$title"?></a>
								<div class="course-details">
									<span class="course-category"><?php echo "$name"?></span>
									<span class="course-price course-free"></span>
								</div>
							</div>
						</div>
<?php } ?>
						<!-- /single course -->

						<!-- single course -->
				<!--		<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course06.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">All You Need To Know About Web Design</a>
								<div class="course-details">
									<span class="course-category">Web Design</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

						<!-- single course -->
					<!--	<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course07.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">How to Get Started in Photography</a>
								<div class="course-details">
									<span class="course-category">Photography</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->


						<!-- single course -->
					<!--	<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="#" class="course-img">
									<img src="./img/course08.jpg" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="#">Typography From A to Z</a>
								<div class="course-details">
									<span class="course-category">Typography</span>
									<span class="course-price course-free">Free</span>
								</div>
							</div>
						</div>
						<!-- /single course -->

					</div>
					<!-- /row -->

				</div>
				<!-- /courses -->

				<div class="row">
					<div class="center-btn">
						<a class="main-button icon-button" href="blog.php?ID=1">More Courses</a>
					</div>
				</div>

			</div>
			<!-- container -->

		</div>
		<!-- /Courses -->

		<!-- Call To Action -->
		<div id="cta" class="section">
<?php 
$query = "SELECT * FROM section2  ORDER BY Sec_ID DESC LIMIT 1";
$result = mysqli_query($conn,$query);
while ($row = mysqli_fetch_array($result)) {
	extract($row);
?>
			<!-- Backgound Image -->
			<?php echo '<div class="bg-image bg-parallax overlay"  style="background-image: url(data:image/jpg;base64,'. base64_encode($pic) .')"></div>'?>

			<!-- /Backgound Image -->

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<div class="col-md-6">
						<h2 class="white-text"><?php echo "$Title";?>.</h2>
						<p class="lead white-text"><?php echo "$p1";?></p>
						<a class="main-button icon-button" href="blog.php?ID=1"><?php echo "$p2";?></a>
					</div>
				
				</div>
			
				
<?php } ?>
				<!-- /row -->
			
			</div>
			<!-- /container -->
			

		</div>
		<!-- /Call To Action -->
		<form enctype="multipart/form-data" method="post" action="1.php" name='form1'>
				<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
Picture: <input name="userfile" type="file" />
Title: <input type="text" name="title">
Text: <input type="text" name="text">
Text2: <input type="text" name="text2">
<input type="submit" name="submit2" value="submit">
</form>
		

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
							<li><a href="index.php">Home</a></li>
							<li><a href="blog.php?ID=1">Courses</a></li>
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
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
