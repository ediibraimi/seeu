<?php
include_once('config.php');

session_start();

$sql = 'SELECT * FROM course';
$selectCourse = $conn->prepare($sql);
$selectCourse->execute();

$courseData = $selectCourse->fetchAll();

?>

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
					<div class="menu-logo">
						<a href="index.php"><img src="assets/images/logo.png" alt=""></a>
					</div>
					<!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
					<!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<!-- Search Button ==== -->
								<li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
							</ul>
						</div>
                    </div>
					<!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <span><i class="ti-search"></i></span>
                        </form>
						<span id="search-remove"><i class="ti-close"></i></span>
                    </div>
					<!-- Navigation Menu ==== -->
                    <?php include_once("navbar.php") ?>
					<!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- header END ==== -->
    <!-- Content -->
    <a href="coursesView.php" target="_blank" rel="noopener noreferrer">dfgh</a>
	<a href="course.php" target="_blank" rel="noopener noreferrer">dfgh</a>
   <div class="page-content bg-white">
    <!-- inner page banner -->
    <div class="page-banner ovbl-dark" style="background-image:url(assets/images/banner/banner3.jpg);">
        <div class="container">
            <div class="page-banner-entry">
                <h1 class="text-white">Our Courses</h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumb row -->
    <div class="breadcrumb-row">
        <div class="container">
            <ul class="list-inline">
                <li><a href="index.php">Home</a></li>
                <li>Our Courses</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb row END -->
    <!-- inner page banner END -->
    <div class="content-block">
        <!-- About Us -->
        <div class="section-area section-sp1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 m-b30">
                        <!-- sidebar content here -->
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="row">
                            <?php foreach ($courseData as $course) { ?>
                            <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
                                <div class="cours-bx">
                                    <div class="action-box">
                                        <img src="assets/images/courses/<?php echo $course['image']; ?>" alt="">
                                        <a href="#" class="btn">Read More</a>
                                    </div>
                                    <div class="info-bx text-center">
                                        <h5><a href="#"><?php echo $course['title']; ?></a></h5>
                                        <span><?php echo $course['category']; ?></span>
                                    </div>
                                    <div class="cours-more-info">
                                        <div class="review">
                                            <span><?php echo $course['review']; ?> Review</span>
                                            <ul class="cours-star">
                                                <?php for ($i = 0; $i < $course['review']; $i++) { ?>
                                                <li class="active"><i class="fa fa-star"></i></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <?php if ($course['price'] == 0) { ?>
                                            <h5 class="free">Free</h5>
                                            <?php } else { ?>
                                            <del>$190</del>
                                            <h5>$<?php echo $course['price']; ?></h5>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- pagination here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact area END -->
</div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <?php include_once("footer.php") ?>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
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
