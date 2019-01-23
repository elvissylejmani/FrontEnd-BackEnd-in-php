<?php
include('config.php');
include('login.php');
if (!(isset($_SESSION['username'])!= '')) {
	header('Location: contact.php');
}
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
						<?php if (!(isset($_SESSION['username'])!= '')) { ?>
						<li><a href="contact.php">Login</a></li>
						<?php } else {
							?><li><a href="logout.php" >logout</a>
							</li>
							<?php
						}
						?>
					</ul>
				</nav>
				<!-- /Navigation -->

			</div>
		</header>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->
			<?php
$query = "SELECT * FROM htmlcourse WHERE htmlcourse.ID='". $_GET["ID"]."' ORDER BY ID ASC";
$reslut = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($reslut))
{
    extract($row);
        ?>
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li><a href="blog.php?ID=1">Courses</a></li>
							<li><?php echo "$title";?></li>
						</ul>
						
						<h1 class="white-text"><?php echo "$title";?></h1>
					
					</div>
				</div>
			</div>
<?php } ?>

		</div>
        <!-- /Hero-area -->
        <?php
$query = "SELECT * FROM htmlcourse WHERE htmlcourse.CorsID='". $_GET["ID"]."' ORDER BY ID ASC";
$reslut = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($reslut))
{
    extract($row);
        ?>
				<div class="row">
		<div id="main" class="col-md-9">
			<h1 style="text-align:center"><?php echo"$title"?></h1>

			<div class="embed-responsive embed-responsive-16by9">
				<iframe class="embed-responsive-item" src="<?php echo"$path";?>" allowfullscreen></iframe>
              </div>
</div>
</div>
                <?php } ?>
		<!-- Blog -->
	
			<!-- container -->

		<!-- /Blog -->

		<!-- Footer -->
		<footer id="footer" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- footer logo -->
					<div class="col-md-6">
						<div class="footer-logo">
							<a class="logo" href="index.php">
								<img src="./img/log.png" alt="logo">
							</a>
						</div>
					</div>
					<!-- footer logo -->

					<!-- footer nav -->
					<ul class="main-menu nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="blog.php?ID=1">Courses</a></li>

					</ul>
					<!-- /footer nav -->

				</div>
				<div class="blog-comments">
							<h3>Comments</h3>

							<!-- single comment -->
							<?php 
									$query = "SELECT * FROM ComentSection WHERE ComID='". $_GET["ID"]."' ORDER BY CID ASC";
									$reslut = mysqli_query($conn,$query);
									while($row = mysqli_fetch_array($reslut))
									{

									extract($row);
								?>
							<div class="media">
								<div class="media-left">
									<img src="./img/avatar.png" alt="">
								</div>
							
								<div class="media-body">
									<h4 class="media-heading"><?php echo "$Name"?></h4>
									<p><?php echo "$Text"?></p>
									<div class="date-reply"><span><?php echo "$date"?></span></div>
								</div>
<?php } ?>
								</div>
								<div class="blog-reply-form">
								<h3>Leave Comment</h3>
								<form method="POST" action="coments.php">
									<input class="input name-input" type="text" name="name" placeholder="Name">
									<input type="hidden" name="id" value="<?php echo $_GET['ID']; ?>">
									<textarea class="input" name="message" placeholder="Enter your Message"></textarea>
								<input type="submit" value="Submit" name="submit">
								</form>
							</div>
								</div>
				<!-- /row -->
				<!-- row -->
				<div id="bottom-footer" class="row">

					<!-- social -->
					
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
