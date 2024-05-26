<?php session_start(); ?>

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
	<link rel="icon" href="../error-404.php" type="image/x-icon" />
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
	<link rel="stylesheet" type="text/css" href="assets/vendors/calendar/fullcalendar.css">

	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">

	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">

	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">

</head>
<body>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 text-center">Add Course</h1>
    </div>
    <br><br>
 <!-- ?jygsf -->
    <div class="container">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card shadow-lg">
            <div class="card-body">
              <form action="addCourse.php" method="POST" enctype="multipart/form-data">
                <div class="form-group mb-3">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group mb-3">
                  <label for="title">Course Name</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group mb-3">
                  <label for="category">Category</label>
                  <input type="text" class="form-control" id="category" name="category">
                </div>
                <div class="form-group mb-3">
                  <label for="review">Review</label>
                  <input type="number" class="form-control" id="review" name="review">
                </div>
                <div class="form-group mb-3">
                  <label for="price">Course Price</label>
                  <input type="number" class="form-control" id="price" name="price">
                </div>
                <button class="btn btn-primary btn-block" type="submit" name="submit">Add Course</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>