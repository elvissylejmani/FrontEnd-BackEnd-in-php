<?php
include('login.php');
include('config.php');

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
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Home</a></li>
							<li>Blog</li>
						</ul>
						<h1 class="white-text">Blog Page</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							 <?php
							// $id1 = 0;
							 if (!empty($_REQUEST['term']))
							 {
								$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
								$query = "SELECT * FROM courses WHERE Category LIKE '%".$term."%' ORDER BY ID DESC"; 
							 }
							 
							 else {
							 $id1 = $_GET['ID'];
								 
							 switch ($id1) {
									 case '1':
									 $query = "SELECT * FROM courses ORDER BY ID DESC";
									 break;
									 case '2':
									 $query = "SELECT * FROM courses WHERE Category='web' ORDER BY ID DESC";
									 break;
									 case '3':
									 $query = "SELECT * FROM courses WHERE Category='programming' ORDER BY ID DESC";
										 break;
										 case '4':
										 $query = "SELECT * FROM courses WHERE Category='SQL' ORDER BY ID DESC";
											 break;
							 }
							}
							 $result = mysqli_query($conn, $query);
						//	 if(mysqli_num_rows($result) > 0)
						//	 {
								 while($row = mysqli_fetch_array($result))
								 {
									 extract($row);
							 
							 ?>
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="course.php?ID=<?php echo $ID?>">
										<?php echo' <img src="data:image/jpg;base64,' . base64_encode($pic) . '" >'; ?>
										</a>
									</div>
									<h4><a href="course.php?ID=<?php echo $ID?>"> <?php echo " $title" ?></a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href=""><?php echo "$name"?></a></span>
										<div class="pull-right">
											<span></span>
										</div>
									</div>
								</div>
							</div>
							<?php 
								 }
							//	}
								?>


						</div>
						<!-- /row -->

						<!-- row -->

							
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form action="">
								<input class="input" type="text" name="term">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categories</h3>
							<a class="category" href="blog.php?ID=2">Web </a>
							<a class="category" href="blog.php?ID=3">Programming </a>
							<a class="category" href="blog.php?ID=4">SQL</a>
						</div>
						<!-- /category widget -->

						<!-- posts widget -->
						
							<!-- /single posts -->

						</div>
						<!-- /posts widget -->

						
						<!-- /tags widget -->

					</div>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
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
							<li><a href="blog.php">Blog</a></li>
						</ul>
					</div>
					<!-- /footer nav -->

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
