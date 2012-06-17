<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8" />
		<title>TC349 Week 5: Todo List with Twitter Bootstrap</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport" />
		<meta content="MacKinley Smith" name="author" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<style type="text/css">
		body {
			padding-bottom:40px;
			padding-top:60px;
		}
		</style>
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
		
		<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		
		<!-- Le fav and touch icons -->
		<link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
	</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="#">TC349 Week 5: Todo</a>
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="index.php"><i class="icon-home icon-white"></i> Home</a></li>
							<li><a href="http://www.mackinleysmith.com/about.php">About</a></li>
							<li><a href="http://www.mackinleysmith.com/contact.php">Contact</a></li>
						</ul>
						<a class="btn btn-primary pull-right" href="http://twitter.github.com/bootstrap/">Twitter Bootstrap Home</a>
						<form class="navbar-search pull-right"><input type="text" class="search-query" placeholder="Search" /></form>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Utility <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="#">Link 1</a></li>
									<li><a href="#">Link 2</a></li>
									<li><a href="#">Link 3</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="span3">
					<div class="well sidebar-nav">
						<ul class="nav nav-list">
							<li class="nav-header">My Calendar</li>
							<li class="active"><a href="#">9:00am: Doctor's Appointment</a></li>
							<li><a href="#">Grocery Shopping</a></li>
							<li><a href="#">5:00pm: Grandma's Birthday Party</a></li>
							<li class="nav-header">Tomorrow</li>
							<li><a href="#">Hit the Gym</a></li>
							<li><a href="#">Turn in Homework</a></li>
							<li class="nav-header">Grocery List</li>
							<li><a href="#">Eggs</a></li>
							<li><a href="#">Milk</a></li>
							<li><a href="#">Butter</a></li>
							<li><a href="#">Cheese</a></li>
							<li class="nav-header">Longterm Goals</li>
							<li><a href="#">Deadlift 180 lbs.</a></li>
							<li><a href="#">Get weight up to 160lbs.</a></li>
							<li><a href="#">Finish Lockwood Mobile App</a></li>
							<li><a href="#">4.0 in TC349</a></li>
						</ul>
					</div>
				</div>
				<div class="span9">
					<div class="hero-unit">
						<h1>Todo Lists, Revolutionized.</h1>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed venenatis, dui at iaculis tempus, sapien mi mollis mauris, ut dapibus nisi tortor eget lectus. Praesent gravida ultricies arcu, at mattis elit gravida ut. Proin pharetra neque eu elit convallis et dictum turpis adipiscing. In vulputate pellentesque metus, eu posuere urna tincidunt et. Quisque vitae quam nisi, sed ultricies mauris. Nulla facilisi. Etiam at felis sed ipsum eleifend pellentesque. Duis ac tellus tellus.</p>
						<p><a class="btn btn-primary btn-large">Sign up &raquo;</a></p>
					</div>
					
					<!-- Example row of columns -->
					<div class="row-fluid">
						<div class="span4">
							<h2>My Calendar</h2>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce 
			dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
			fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
			mollis euismod. Donec sed odio dui. </p>
							<p><a class="btn" href="#">View details &raquo;</a></p>
						</div>
						<div class="span4">
							<h2>Tomorrow</h2>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce 
			dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
			fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
			mollis euismod. Donec sed odio dui. </p>
							<p><a class="btn" href="#">View details &raquo;</a></p>
						</div>
						<div class="span4">
							<h2>Grocery List</h2>
							<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
			in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
			Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
			 ut fermentum massa justo sit amet risus.</p>
			 				<p><a class="btn" href="#">View details &raquo;</a></p>
			 			</div>
			 		</div>
			 		
			 		<div class="row-fluid">
						<div class="span4">
							<h2>Longterm Goals</h2>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce 
			dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
			fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
			mollis euismod. Donec sed odio dui. </p>
							<p><a class="btn" href="#">View details &raquo;</a></p>
						</div>
						<div class="span4">
							<h2>Hit the Gym</h2>
							<p>Donec id elit non mi porta gravida at eget metus. Fusce 
			dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut 
			fermentum massa justo sit amet risus. Etiam porta sem malesuada magna 
			mollis euismod. Donec sed odio dui. </p>
							<p><a class="btn" href="#">View details &raquo;</a></p>
						</div>
						<div class="span4">
							<h2>Turn in Homework</h2>
							<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis 
			in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. 
			Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh,
			 ut fermentum massa justo sit amet risus.</p>
			 				<p><a class="btn" href="#">View details &raquo;</a></p>
			 			</div>
			 		</div>
				</div>
			</div>
	 		
	 		<hr />
	 		
	 		<footer><p>&copy; 2012 MacKinley Smith</p></footer>
		</div>
		
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</body>
</html>