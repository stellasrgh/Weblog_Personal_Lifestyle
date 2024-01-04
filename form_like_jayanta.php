<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Weblog a Blogging Category Bootstrap responsive WebTemplate | Single :: w3layouts</title>
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
    <link rel="stylesheet" href="css/single.css">
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
    <!--Header-->

    <?php include "header.php" ?>
    <!--//header-->
    <div class="banner-inner">
    </div>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Like Page</li>
    </ol>

    <!--//banner-->
    <section class="banner-bottom">
        <!--/blog-->
        <div class="container">
            <div class="row">
                <!--left-->
                <div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
                    <!-- <div class="blog-grid-top">
                        <div class="b-grid-top">
                            <div class="blog_info_left_grid">
                                <a href="single.html">
                                    <img src="images/b1.jpg" class="img-fluid" alt="">
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
                                        <a href="#">
                                            <i class="far fa-comment"></i> 0 Comments</a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <h3>
                            <a href="single.html">Amet consectetur adipisicing </a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna
                            aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis
                            aute irudre dolor in elit sed uta labore dolore reprehender</p>
                        <a href="single.html" class="btn btn-primary read-m">Read More</a>
                    </div> -->
                    <?php include "jayanta-p.php" ?>

                    <div class="comment-top">
                        <div class="comment-top">
                            <h4>Like us</h4>
                            <div class="comment-bottom">
                                <form action="action_insert_like_j.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" type="text" name="name" placeholder="Name" required>
                                    <!-- fungsi REQUIRED adlh agar inputan di kolom harus diisi. Jika tdk maka akan muncul tulisan PLEASE FILL OUT THIS FILED -->
                                    <!-- REQUIRED boleh pakai ="" atau cukup REQUIRED saja -->

                                    <button type="submit" class="btn btn-primary submit mt-3">Submit</button>
                                </form>
                            </div>
                        </div>


                      
                    </div>
                    <h4 class="mt-4">Like</h4>

                        <?php include "connection.php";
                        // comment adalah nama tabel di database
                        $tampil_comment = mysqli_query($koneksi, "SELECT*FROM like_jayanta LIMIT 7");
                        while ($c = mysqli_fetch_object($tampil_comment)) :
                        ?>
                            <p> <?php echo $c->name ?></p>
                            
                        <?php endwhile ?>
                </div>

                <!--//left-->
                <!--right-->
                <!-- <aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
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
						<div class="tech-btm">
							<h4>Categories</h4>
							<ul class="list-group single">
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Cras justo odio
									  <span class="badge badge-primary badge-pill">14</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Dapibus ac facilisis in
									  <span class="badge badge-primary badge-pill">2</span>
									</li>
									<li class="list-group-item d-flex justify-content-between align-items-center">
									  Morbi leo risus
									  <span class="badge badge-primary badge-pill">1</span>
									</li>
								  </ul>
						</div>
						<div class="tech-btm">
							<h4>Top stories of the week</h4>

							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Jan, 2018</span>
									</div>
								</div>

							</div>
							<div class="blog-grids row mb-3">
								<div class="col-md-5 blog-grid-left">
									<a href="single.html">
										<img src="images/6.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="col-md-7 blog-grid-right">
									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male non felis </a>
									</h5>
									<div class="sub-meta">
										<span>
											<i class="far fa-clock"></i> 20 Feb, 2018</span>
									</div>
								</div>

							</div>
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
						<div class="single-gd tech-btm">
							<h4>Recent Post</h4>
							<div class="blog-grids">
								<div class="blog-grid-left">
									<a href="single.html">
										<img src="images/b1.jpg" class="img-fluid" alt="">
									</a>
								</div>
								<div class="blog-grid-right">

									<h5>
										<a href="single.html">Pellentesque dui, non felis. Maecenas male</a>
									</h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>

				</aside> -->
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


</body>

</html>