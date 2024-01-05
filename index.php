<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Home :: w3layouts</title>
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
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
	<style>
		/* .carousel-item {
	background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;
	background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;
	background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;
	background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(../images/banner1.jpg) no-repeat;
	background-size: cover;
} */
		/* bawaan asli image carousel adalh URL(../images/banner1.jpg) yg tdnya di copy paste dr STYLE.CSS. Tp stlh dipindah ke index sini, imagenya hilang dan tak bs ditukar image lain jg. So, caranya agar image bs ditampilkan kembali, maka tanda titik2 stlh URL dihapus. Hslnya adlh spt di bawah ini. */
		/* pindahkan class CSS carousel dr STYLE.CSS ke dlm INDEX.HTML agar dpt difungsikan */
		.carousel-item {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/prambanan.jpg) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/prambanan.jpg) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/prambanan.jpg) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/prambanan.jpg) no-repeat;
			background-size: cover;

			/* utk menetapkan posisi gambar lbh condong ke bawah */
			background-position: center bottom;
		}

		.carousel-item.item2 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Baronsampan.jpg) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Baronsampan.jpg) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Baronsampan.jpg) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Baronsampan.jpg) no-repeat;
			background-size: cover;
			background-position: center bottom;

		}

		.carousel-item.item3 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Thai3.jpg) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Thai3.jpg) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Thai3.jpg) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/Thai3.jpg) no-repeat;
			background-size: cover;
		}

		.carousel-item.item4 {
			background: -webkit-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/C2.jpg) no-repeat;
			background: -moz-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/C2.jpg) no-repeat;
			background: -ms-linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/C2.jpg) no-repeat;
			background: linear-gradient(rgba(23, 22, 23, 0.2), rgba(23, 22, 23, 0.5)), url(images/C2.jpg) no-repeat;
			background-size: cover;
		}
	</style>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
	<!-- cara menyingkat dan mengubah HEADER/FOOTER dr HTML menjd PHP:
	1. Bgn Header ditutup dulu sampai batas bawah.
2. CUT HEADER
3. buat file baru menjd PHP dgn nama HEADER.PHP
4. PASTE kan No.2 ke NO.3
5. Stlh itu ketik INCLUDE di HEADER.PHP cthnya:
// 6. Jgn lupa tukar .HTML di semua file di HEADER menjd .PHP baik itu yg di HEADER sblh kiri maupun di HEADER.PHP
// 7. Link HEADER di bawah ini adalah bawaan asli dr weblog yg di CUT dan PASTE di header.php
// 8. semua urusan edit mengedit dilakukan di folder header.php-->


	<!-- header dimasukkan melalui INCLUDE -->
	<?php include "header.php"; ?>




	<!--banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="about.php" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="blog1.php" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Create the lifestyle
							<span>you desire</span>
						</h3>
						<div class="read">
							<a href="blog2.php" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Engaging Purposeful
							<span>and Creative</span>
						</h3>
						<div class="read">
							<a href="blog3.php" class="btn btn-primary read-m">Read More</a>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model -->
	<!--//banner-->
	<section class="bottom-slider">
		<div class="course_demo1">
			<ul id="flexiselDemo1">
				<li>
					<div class="blog-item">
						<img src="images/mesra.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#mesra">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fed and inequality
								<span>Blogger
									<label>|</label>
									<i>Stella1</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<!-- ini adalah data-target="#baron" dari id="baron" dibawah -->
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#baron">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/wediombo.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#wediombo">
							<i class="fas fa-play"></i>
						</button>


						<div class="floods-text">
							<h3>Billionaires versus Millionaires
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/twintower.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#kl">
							<i class="fas fa-play"></i>
						</button>


						<div class="floods-text">
							<h3>Billionaires versus Millionaires
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>

				<!-- new -->
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<!-- ini adalah data-target="#bunga" dari id="baron" dibawah -->
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#bunga">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<!-- ini adalah data-target="#baron" dari id="baron" dibawah -->
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#baron">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<!-- ini adalah data-target="#baron" dari id="baron" dibawah -->
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#baron">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<li>
					<div class="blog-item">
						<img src="images/2.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
						<!-- ini adalah data-target="#baron" dari id="baron" dibawah -->
						<button type="button" class="btn btn-primary play" data-toggle="modal" data-target="#baron">
							<i class="fas fa-play"></i>
						</button>

						<div class="floods-text">
							<h3>The fastest insect in the world
								<span>Blogger
									<label>|</label>
									<i>Adom Smith</i>
								</span>
							</h3>

						</div>
					</div>
				</li>
				<!-- end new -->
			</ul>
		</div>
		<div class="modal fade" id="mesra" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/oDt-5uy7UaM?si=lByJEf9lgHWJgaDM"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="baron" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/ZklLiaAp1L0?si=sR4BiYG7hw8P5xSj"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  -->
		<!-- modal start video nya untuk id="wediombo" harus sesuai dengan tombol data-target="#wediombo" diatas -->
		<div class="modal fade" id="wediombo" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/ZklLiaAp1L0?si=sR4BiYG7hw8P5xSj"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  -->
		<!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="kl" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  -->

		<!-- new video -->
		<!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="kl" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  --><!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="kl" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  --><!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="kl" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  --><!-- modal start video nya untuk id="baron" harus sesuai dengan tombol data-target="#baron" diatas -->
		<div class="modal fade" id="kl" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="embed-responsive embed-responsive-21by9">
							<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- modal end  -->
		<!-- end new video -->
	</section>
	<!--/main-->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/amazingKL.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> JAN 15,2022</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="#">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							<a href="read_more_kl.php">Kuala Lumpur, Malaysia </a>
						</h3>
						<p>Get started with Bootstrap, the world’s most popular framework for building responsive, mobile-first sites, with jsDelivr and a template starter page.</p>
						<a href="read_more_kl.php" class="btn btn-primary read-m">Read More</a>
					</div>
					<!--//silder-->
					<div class="blog-mid-sec">
						<ul id="flexiselDemo2">
							<li>
								<div class="blog-item">
									<img src="images/tennis1.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#tennis">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Healthy Stella </h3>
									</div>
								</div>
							</li>

							<li>

								<div class="blog-item">
									<img src="images/sweetme.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#kuliner">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Sweet Stella </h3>
									</div>
								</div>
							</li>



							<li>
								<div class="blog-item">
									<img src="images/wisudaPremium.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#wisuda">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Proud Stella </h3>
									</div>
								</div>
							</li>

							<li>
								<div class="blog-item">
									<img src="images/mebrownbike.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Amazing Stella </h3>
									</div>
								</div>
							</li>

							<li>
								<div class="blog-item">
									<img src="images/winterselfi.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Happy Stella </h3>
									</div>
								</div>
							</li>

							<li>
								<div class="blog-item">
									<img src="images/summeredi.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Soulmate Stella </h3>
									</div>
								</div>
							</li>

							<li>
								<div class="blog-item">
									<img src="images/alanabypool.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Self-love Stella </h3>
									</div>
								</div>
							</li>

							<li>
								<div class="blog-item">
									<img src="images/swimpjpalm.jpg" alt=" " class="img-fluid" style="height: 400px; object-fit:cover" />
									<button type="button" class="btn btn-primary play sec" data-toggle="modal" data-target="#exampleModal">
										<i class="fas fa-play"></i>
									</button>
									<div class="floods-text">
										<h3> Active Stella </h3>
									</div>
								</div>
							</li>

						</ul>
					</div>
					<!-- modal start video nya untuk id="tennis" harus sesuai dengan tombol data-target="#tennis" diatas -->

					<div class="modal fade" id="tennis" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe allow="fullscreen;" src="https://www.youtube.com/embed/wW11XQ6zzsI?si=G-cU75vy8cFCSi3x"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->

					<!-- modal start video nya untuk id="kuliner" harus sesuai dengan tombol data-target="#kuliner" diatas -->

					<div class="modal fade" id="kuliner" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/jCEfsk94cpA?si=gOqBhFyA5qWKlGo8"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->

					<!-- modal start video nya untuk id="satu" harus sesuai dengan tombol data-target="#satu" diatas -->

					<div class="modal fade" id="satu" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->
					<!-- modal start video nya untuk id="satu" harus sesuai dengan tombol data-target="#satu" diatas -->

					<div class="modal fade" id="satu" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->
					<!-- modal start video nya untuk id="bunga" harus sesuai dengan tombol data-target="#bunga" diatas -->
					<div class="modal fade" id="bunga" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->
					<!-- modal start video nya untuk id="satu" harus sesuai dengan tombol data-target="#satu" diatas -->

					<div class="modal fade" id="satu" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->
					<!-- modal start video nya untuk id="satu" harus sesuai dengan tombol data-target="#satu" diatas -->

					<div class="modal fade" id="satu" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->
					<!-- modal start video nya untuk id="satu" harus sesuai dengan tombol data-target="#satu" diatas -->

					<div class="modal fade" id="satu" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<div class="embed-responsive embed-responsive-21by9">
										<iframe src="https://www.youtube.com/embed/Q4tOuWqV_sY?si=W0InwemtEZAoQJuL"></iframe>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- modal end -->

					<!--//silder-->
					<div class="blog-girds-sec">
						<div class="row">
							<div class="col-md-6 blog-grid-top">
								<div class="b-grid-top">
									<div class="blog_info_left_grid">
										<a href="single.html">
											<img src="images/b2.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<h3>
										<a href="single.html">Amet consectetur </a>
									</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>
								</div>
								<ul class="blog-icons">
									<li>
										<a href="#">
											<i class="far fa-clock"></i> 5 Monts</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
							</div>
							<div class="col-md-6 blog-grid-top">
								<div class="b-grid-top">
									<div class="blog_info_left_grid">
										<a href="single.html">
											<img src="images/b3.jpg" class="img-fluid" alt="">
										</a>
									</div>
									<h3>
										<a href="single.html">Amet adipisicing </a>
									</h3>
									<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt aliqua uta enim.</p>

								</div>
								<ul class="blog-icons">
									<li>
										<a href="#">
											<i class="far fa-clock"></i> 5 Monts</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-comment"></i> 21</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-eye"></i> 2000</a>
									</li>

								</ul>
							</div>
						</div>
					</div>
				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
					<div class="right-blog-info text-left">
						<div class="tech-btm">
							<img src="images/iklangif6.gif" class="img-fluid" alt="">
						</div>
						<div class="tech-btm">
							<h4> Advertise your Product here</h4>
							<p>Contact us at <br><a href="https://wa.me/60165852841"> <i class="bi bi-whatsapp"></i> +60165852841</a><br>
								<a class="button"><i class="bi bi-envelope-at-fill"></i> saragih@kledok.com</a>
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
						<?php include "recent.php" ?>

					</div>

				</aside>
				<!--//right-->
			</div>
		</div>
	</section>
	<!--//main-->
	<!--/middle-->
	<section class="middle-sec-agileinfo-w3ls">
		<div class="container">
			<div class="row inner-sec">
				<div class="col-md-4 news-left">
					<ul id="demo1_thumbs" class="list-inline">
						<li>
							<a href="images/class1.jpg">
								<img src="images/class1.jpg" style="height:85px; object-fit:cover" alt="" data-desoslide-caption="<h3>Latest Post 1</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/mesra2.jpg">
								<img src="images/mesra2.jpg" style="height:85px; object-fit:cover" alt="" data-desoslide-caption="<h3>Latest Post 2</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/prambanan3.jpg">
								<img src="images/prambanan3.jpg" style="height:85px; object-fit:cover" alt="" data-desoslide-caption="<h3>Latest Post 3</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
						<li>
							<a href="images/mesra1.jpeg">
								<img src="images/mesra1.jpeg" style="height:85px; object-fit:cover" alt="" data-desoslide-caption="<h3>Latest Post 4</h3>">
								<div class="mid-text-info">
									<h4>Maecenas aliqua</h4>
									<p>Integer </p>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div id="demo1_main_image" class="col-md-8  news-right"></div>
				<div class="clearfix"> </div>
			</div>
		</div>

	</section>
	<!--//middle-->
	<!---->
	<section class="main-content-w3layouts-agileits">
		<div class="container">
			<div class="row">
				<!--left-->
				<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
					<div class="blog-grid-top">
						<div class="b-grid-top">
							<div class="blog_info_left_grid">
								<a href="single.html">
									<img src="images/b4.jpg" class="img-fluid" alt="">
								</a>
							</div>
							<div class="blog-info-middle">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-calendar-alt"></i> FEB 15,2018</a>
									</li>
									<li class="mx-2">
										<a href="#">
											<i class="far fa-thumbs-up"></i> 201 Likes</a>
									</li>
									<li>
										<a href="form_comment.php">
											<i class="far fa-comment"></i> 15 Comments</a>
									</li>

								</ul>
							</div>
						</div>

						<h3>
							<a href="read_more_satu.php">Amet consectetur adipisicing </a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
							aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
							aute irudre dolor in elit sed uta labore dolore reprehender</p>
						<a href="read_more_satu.php" class="btn btn-primary read-m">Read More</a>
					</div>
					<!--//silder-->


				</div>
				<!--//left-->
				<!--right-->
				<aside class="col-lg-4 agileits-w3ls-right-blog-con text-left">
					<?php include "recent.php" ?>

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
	<!-- desoslide-JavaScript -->
	<script src="js/jquery.desoslide.js"></script>
	<script>
		$('#demo1_thumbs').desoSlide({
			main: {
				container: '#demo1_main_image',
				cssClass: 'img-responsive'
			},
			effect: 'sideFade',
			caption: true
		});
	</script>

	<!-- requried-jsfiles-for owl -->
	<script>
		$(window).load(function() {
			$("#flexiselDemo1").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script>
		$(window).load(function() {
			$("#flexiselDemo2").flexisel({
				visibleItems: 3,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 3
					}
				}
			});

		});
	</script>
	<script src="js/jquery.flexisel.js"></script>
	<!-- //password-script -->
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

			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
			};


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


</body>

</html