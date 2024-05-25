<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />

	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />

	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">

	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>

	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>

<body id="bg">
	<div class="page-wraper">
		<div id="loading-icon-bx"></div>

		<!-- Header Top ==== -->
		<header class="header rs-nav">
			<div class="top-bar">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="topbar-left">
							<ul>
								<li><a href="faq-1.php"><i class="fa fa-question-circle"></i>Ask a Question</a></li>
								<li><a href="javascript:;"><i class="fa fa-envelope-o"></i>Support@website.com</a></li>
							</ul>
						</div>
						<div class="topbar-right">
							<ul>
								<li>
									<select class="header-lang-bx">
										<option data-icon="flag flag-uk">English UK</option>
										<option data-icon="flag flag-us">English US</option>
									</select>
								</li>
								<li><a href="login.php">Login</a></li>
								<li><a href="register.php">Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sticky-header navbar-expand-lg">
				<div class="menu-bar clearfix">
					<div class="container clearfix">
						<!-- Header Logo ==== -->

						<!-- Mobile Nav Button ==== -->
						<button class="navbar-toggler collapsed menuicon justify-content-end" type="button"
							data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown"
							aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- Author Nav ==== -->
						<div class="secondary-menu">
							<div class="secondary-inner">
								<ul>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a>
									</li>
									<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
									<!-- Search Button ==== -->
									<li class="search-btn"><button id="quik-search-btn" type="button"
											class="btn-link"><i class="fa fa-search"></i></button></li>
								</ul>
							</div>
						</div>
						<!-- Search Box ==== -->
						<div class="nav-search-bar">
							<form action="#">
								<input name="search" value="" type="text" class="form-control"
									placeholder="Type to search">
								<span><i class="ti-search"></i></span>
							</form>
							<span id="search-remove"><i class="ti-close"></i></span>
						</div>
						<!-- Navigation Menu ==== -->
						<?php include_once ("navbar.php") ?>
						<!-- Navigation Menu END ==== -->
					</div>
				</div>
			</div>
		</header>
		<!-- header END ==== -->
		<!-- Content -->
		<div class="page-content bg-white">
			<!-- inner page banner -->
			<div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner2.jpg);">
				<div class="container">
					<div class="page-banner-entry">
						<h1 class="text-white">Membership</h1>
					</div>
				</div>
			</div>
			<!-- Breadcrumb row -->

			<!-- Breadcrumb row END -->
			<!-- inner page banner END -->
			<div class="content-block">
				<!-- About Us -->
				<div class="section-area section-sp2">
					<div class="container">
						<div class="row">
							<div class="col-md-12 heading-bx text-center">
								<h2 class="title-head text-uppercase m-b0">Set a plan, start learning and <br /> <span>
										unlock your potential</span></h2>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum has been the industry's.</p>
							</div>
						</div>
						<div class="pricingtable-row">
							<div class="row">
								<?php
								// Assuming you have already established a connection to your MySQL database
								include_once ('config.php');

								// Query to fetch data from the database
								$query = "SELECT * FROM memberships";
								$stmt = $conn->query($query);

								if ($stmt) {
									// Check if there are any results
									if ($stmt->rowCount() > 0) {
										// Output data of each row
										while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
											$price = $row["price"];
											$description = $row["description"];
											?>
											<div class="col-sm-12 col-md-4 col-lg-4 m-b40 ">
												<div class="pricingtable-wrapper">
													<div class="pricingtable-inner">
														<div class="pricingtable-main">
															<div class="pricingtable-price">
																<span class="priceing-doller"></span>
																<span class="pricingtable-bx ">$<?php echo $price ; ?></span>
																<span class="pricingtable-type">Semester</span>
															</div>
															<div class="pricingtable-title">
																<h2>Programming</h2>
																<p><?php echo $description; ?></p>
															</div>
														</div>
														<ul class="pricingtable-features">
															<li>One Time Fee</li>
															<li>Non Featured</li>
															<li>24/7 Support</li>
														</ul>
														<div class="pricingtable-footer">
															<a href="registerProg.php" class="btn radius-xl">Register</a>
														</div>
													</div>
												</div>
											</div>
											<?php
										}
									} else {
										echo "No results found";
									}
								} else {
									// Handle query execution error
									echo "Error executing query: " . $conn->errorInfo()[2];
								}
								?>
							</div>
						</div>

					</div>
				</div>
				<!-- Our Services ==== -->
				<div class="section-area section-sp2 bg-fix ovbl-dark join-bx"
					style="background-image:url(assets/images/background/bg1.jpg);">
					<div class="container">
						<div class="row">
							<div class="col-md-12 text-center heading-bx text-white">
								<h2 class="title-head m-b0">Why Choose <span>Us</span></h2>
								<p class="m-b0">Lorem Ipsum is simply dummy text of the printing and typesetting
									industry. Lorem Ipsum has been the industry's standard dummy text ever since the</p>
							</div>
							<div class="col-md-6">
								<div class="why-chooses-bx ">
									<div class="ttr-accordion m-b30 faq-bx" id="accordion1">
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq1" class="collapsed"
														data-parent="#faq1">
														Why won't my payment go through? </a>
												</h6>
											</div>
											<div id="faq1" class="acod-body collapse">
												<div class="acod-content">Web design aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq2" class="collapsed"
														data-parent="#faq2">
														How do I get a refund?</a>
												</h6>
											</div>
											<div id="faq2" class="acod-body collapse">
												<div class="acod-content">Graphic design aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq3" class="collapsed"
														data-parent="#faq3">
														How do I redeem a coupon? </a>
												</h6>
											</div>
											<div id="faq3" class="acod-body collapse">
												<div class="acod-content">Developement aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq4" class="collapsed"
														data-parent="#faq4">
														Why aren't my courses showing in my account? </a>
												</h6>
											</div>
											<div id="faq4" class="acod-body collapse">
												<div class="acod-content">Developement aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq5" class="collapsed"
														data-parent="#faq5">
														Changing account name </a>
												</h6>
											</div>
											<div id="faq5" class="acod-body collapse">
												<div class="acod-content">Developement aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
										<div class="panel">
											<div class="acod-head">
												<h6 class="acod-title">
													<a data-toggle="collapse" href="#faq6" class="collapsed"
														data-parent="#faq6">
														Why aren't my courses showing in my account? </a>
												</h6>
											</div>
											<div id="faq6" class="acod-body collapse">
												<div class="acod-content">Developement aorem apsum dolor sit amet,
													adipiscing elit, sed diam nibh euismod tincidunt ut laoreet dolore
													magna aliquam erat volutpat.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="video-bx">
									<img src="assets/images/about/pic1.jpg" alt="" />
									<a href="https://www.youtube.com/watch?v=x_sJzVe9P_8" class="popup-youtube video"><i
											class="fa fa-play"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- contact area END ==== -->
			<!-- Our Status ==== -->
			<div class="section-area content-inner section-sp1">
				<div class="container">
					<div class="section-content">
						<div class="row">
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">3000</span><span>+</span>
									</div>
									<span class="counter-text">Completed Projects</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">2500</span><span>+</span>
									</div>
									<span class="counter-text">Happy Clients</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-primary">
										<span class="counter">1500</span><span>+</span>
									</div>
									<span class="counter-text">Questions Answered</span>
								</div>
							</div>
							<div class="col-lg-3 col-md-6 col-sm-6 col-6 m-b30">
								<div class="counter-style-1">
									<div class="text-black">
										<span class="counter">1000</span><span>+</span>
									</div>
									<span class="counter-text">Ordered Coffee's</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Our Status END ==== -->
		</div>
		<!-- Content END-->
		<!-- Footer ==== -->
		<?php include_once ("footer.php") ?>
		<!-- Footer END ==== -->
		<button class="back-to-top fa fa-chevron-up"></button>
	</div>
	<!-- External JavaScripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/js/popper.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
	<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
	<script src="assets/vendors/counter/waypoints-min.js"></script>
	<script src="assets/vendors/counter/counterup.min.js"></script>
	<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
	<script src="assets/vendors/masonry/masonry.js"></script>
	<script src="assets/vendors/masonry/filter.js"></script>
	<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
	<script src="assets/js/functions.js"></script>
	<script src="assets/js/contact.js"></script>
	<script src='assets/vendors/switcher/switcher.js'></script>
</body>

</html>