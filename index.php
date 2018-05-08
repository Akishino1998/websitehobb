<!DOCTYPE html>
<html>

<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css ">

    <meta name="viewreport" content="width=device-width, intial-scale=1.0">
</head>
<body>
	
	<?php include("layout/header.php") ?>
	<div class="container">
		<div class="slider">
			<ul class="slides">
				<li><img src="img/img1.jpg" width="400" alt=""></li>
				<li><img src="img/img2.jpg" width="400" alt=""></li>
				<li><img src="img/img3.jpg" width="400" alt=""></li>
				<li><img src="img/img4.jpg" width="400" alt=""></li>
				<li><img src="img/img5.jpg" width="400" alt=""></li>
			</ul>
		</div>
	
		<img src="img/img5.jpg" width="400" alt="" class="materialboxed">

	</div>
		<div class="row">
			<div class="col s12 m6">
				<div class="card">
					<img src="img/img5.jpg" class="responsive-img">
					<div class="card-content">
						<span class="card-title">Doctor Computer</span>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="card-action">
							Selengkapnya!
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<div class="card-title">Doctor Computer</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
						<div class="card-action">
							Selengkapnya!
						</div>
					</div>
				</div>
			</div>
		</div>





	<script src="js/materialize.min.js"></script>
	<script src="js/JQuery.js"></script>
	<script>
		$(document).ready(function(){

			$('.materialboxed').materialbox();

			$('.slider').slider({
				indicators : false,
				transition : 100,
				interval : 100,
			});
		});
	</script>
</body>
</html>