<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | About :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Weblog a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/single.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	    rel="stylesheet">
</head>

<body>
	<!--Header-->
<?php include "header.php" ?>
	<!--//header-->

	<!--/banner-->
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="index.php">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>
	<!--//banner-->
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<h3 class="tittle">About</h3>
			<div class="row inner-sec">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					
					<div class="row">
						<div class=" card mt-3">
							<img class="card-img-top" src="images/suitcase.jpg" alt="Card-image" style="height: 100%; object-fit: cover;">
							<div class="card-body">
								<h5 class="card-title"> About Where to Go </h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<!-- <a href="eat_drink.php" class="btn btn-primary read-m">Read More</a> -->
							</div>
						</div>
                        
                        
					
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/banner1.jpg" class="img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4>Sign up to our newsletter</h4>
							<p>Pellentesque dui, non felis. Maecenas male </p>
							<form action="#" method="post">
								<input type="email" placeholder="Email" required="">
								<input type="submit" value="Subscribe">
							</form>

						</div>
						<div class="tech-btm widget_social">
							<h4>Stay Connect</h4>
							<ul>

								<li>
									<a class="twitter" href="#">
										<i class="fab fa-twitter"></i>
										<span class="count">317K</span> Twitter Followers</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<span class="count">218k</span> Twitter Followers</a>
								</li>
								<li>
									<a class="dribble" href="#">
										<i class="fab fa-dribbble"></i>

										<span class="count">215k</span> Dribble Followers</a>
								</li>
								<li>
									<a class="pin" href="#">
										<i class="fab fa-pinterest"></i>
										<span class="count">190k</span> Pinterest Followers</a>
								</li>

							</ul>
						</div>
						<div class="single-gd my-5 tech-btm">
							<h4>Our Progress</h4>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
							<div class="progress">
								<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0"
								    aria-valuemax="100"></div>
							</div>
						</div>
						<?php include "recent.php"?>
					</div>

				</aside>
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->

	<!--footer start-->
<?php include "footer.php"?>
	<!--footer end-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>

	<!-- //Custom-JavaScript-File-Links -->
	<script src="js/bootstrap.js"></script>
<style>
	#more{
		display: none;
	}
</style>

<script>
	function myFunction(){
		var dots = document.getElementById("dots");
		var moreText = document.getElementById("more");
		var btnText = document.getElementById("myBtn");
		// jika statement (property) dots.style.display === "none" maka perintah di dlm IF (property=value) dijalankan. 

		if (dots.style.display === "none") {
			dots.style.display = "inline";
			btnText.innerHTML = "Read more";
			moreText.style.display = "none";
		} else {
			dots.style.display = "none";
			btnText.innerHTML = "Read less";
			moreText.style.display = "inline";
		}
	}
</script>
</body>

</html>