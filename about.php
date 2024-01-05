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
		addEventListener("load", function() {
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
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	
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
					<div class="blog-grid-top">

						<div class="blog_info_left_grid">
							<a href="single.php">
								<img src="images/Foto_about-utama.jpg" class="img-fluid" alt="" style="width: 800px;">
							</a>
						</div>
						<!-- H3 dikasih id (JUDUL) untuk keperluan tombol SEE MORE agar tetap di bgn ID=JUDUL. Jgn lupa JUDUL ditambahkan di HREF=#JUDUL di bawah-->
						<h3 id="judul">
							"Don't downgrade your dream to your reality; upgrade your faith to match your destiny instead."

						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna <span id="dots">....</span>
							<span id="more">aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
								aute irudre dolor in elit sed uta labore dolore reprehender</span>
						</p>
						<!-- untuk membuat SEE MORE dibutuhkan javascript ONCLICK dan ID tombol untuk menjalankannya -->
						<!-- <a href="single.html" class="btn btn-primary read-m onclick=" onclick="myFunction()" id="myBtn">See More</a> -->
						<a href="#judul" class="btn btn-primary read-m " onclick="myFunction()" id="myBtn">See More</a>
						<!-- HREF di atas dikasih tambahan # agar tetap di halaman ABOUT (tdk pindah ke halaman lain) saat diklik-->
					</div>
					<div class="row">
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/Nasikuning.jpg" alt="Card-image" style="height: 300px; object-fit: cover;">
							<div class="card-body">
								<h5 class="card-title"> About What to Eat & to Drink </h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="to_eat_drink.php" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/KUL2.jpg" alt="Card-image" style="height: 300px; object-fit: cover;">
							<div class="card-body">
								<h5 class="card-title"> About Where to Go </h5>
								<p class="card-text mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt.. </p>
								<a href="to_go.php" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/PJ_Palms_coatches.jpg" alt="Card-image" style="height: 300px; object-fit:cover;">
							<div class="card-body">
								<h5 class="card-title"> About what to Workout </h5>
								<p class="card-text mb-3"> I passed the hardest moment alone, while everyone thought I was fine. </p>
								<a href="to_workout.php" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
						<div class="col-md-6 card mt-3">
							<img class="card-img-top" src="images/me_groceryshop.jpg" alt="Card-image" style="height:300px; object-fit:cover">
							<div class="card-body">
								<h5 class="card-title"> About "me-time" </h5>
								<p class="card-text mb-3"> What if....everything I am going through is preparing me for what I asked for? </p>
								<a href="to_me-time.php" class="btn btn-primary read-m">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/iklangif2.gif" class="img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4><i>Place your Advertisment here</i></h4>
							<p>Contact us at <br><a href="https://wa.me/60165852841"> <i class="bi bi-whatsapp"></i> +60165852841</a><br>
								<a class="button"> <i class="bi bi-envelope-at-fill"></i> saragih@kledok.com</a>
							</p>
							<!-- <form action="#" method="post">
								<input type="email" placeholder="Email" required="">
								<input type="submit" value="Subscribe">
							</form> -->

						</div>
						<div class="tech-btm widget_social">
							<h4>Stay Connect</h4>
							<ul>
								<li>
									<a class="facebook" href="https://www.facebook.com/ceztar.2023" target="_blank">
										<i class="fab fa-facebook-f"></i>
										<span class="count"></span> Facebook </a>
								</li>

								<li>
									<a class="bg-light" href="https://www.youtube.com/@takdandan4260" style="color: red;">
										<i class="fab fa-youtube"></i>
										<span class="count"></span>YouTube
									</a>
								</li>
								<!-- <li>
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
								</li> -->

							</ul>
						</div>
						<div class="single-gd my-5 tech-btm">
							<h4>Our Offers</h4>
							<div class="tech-btm">
								<img src="images/iklangif3.gif" class="img-fluid" alt="">
							</div>
							<!-- <div class="progress">
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
							</div> -->
						</div>
						<?php include "recent.php" ?>

					</div>

				</aside>
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->

	<!--footer start-->
	<?php include "footer.php" ?>
	<!--footer end-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--/ start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!--// end-smoth-scrolling -->

	<script>
		$(document).ready(function() {
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
		#more {
			display: none;
		}
	</style>

	<script>
		function myFunction() {
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