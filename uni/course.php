<?php
    session_start();

    include_once('config.php');

    if(empty($_SESSION['email'])) {
        header("Location: login.php");
    }

    $sql = "SELECT * FROM course"; // corrected table name

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

</head><body>
<style>
  .navbar-nav .nav-link i {
    transition: transform 0.2s;
    transform: scale(0.8);
  }

  .bg-darkgrey {
    background-color: #333333 !important;
  }
  .navbar-nav .nav-link:hover {
    border-bottom: 3px solid #007bff;
  }
  .navbar-nav .nav-link.active {
    border-bottom: 3px solid #007bff;
  }
  .navbar-nav .nav-link i:hover {
    border-bottom: 3px solid #007bff;
  }
  .navbar-nav .nav-link.active i {
    border-bottom: 3px solid #007bff;
  }
  .dropdown-menu .dropdown-item .dropdown-toggle i.fas.fa-bell:hover {
    border-bottom: 3px solid #007bff;
  }
</style>
 <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center 
            pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">All Courses</h2>
            </div>  
            
            <a href="coursesView.php" class="btn btn-primary"> + Add course</a>
    <a href="courses.php" class="btn btn-secondary">View Courses</a>
<hr>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Course image</th>
                            <th>Course Title</th>
                            <th>Course Category</th>
                            <th>Course price</th>
                            <th>Course review</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach ($courseData as $course) { ?>
                            <tr>
                                <td>
                                    <?php echo $course['id']; ?>  </td>
                                    <td>
                                    <?php echo $course['image']; ?>  </td>
                                    <td>
                                    <?php echo $course['title']; ?>  </td>
                                    <td>
                                    <?php echo $course['category']; ?>  </td>
                                    <td>
                                    <?php echo $course['price']; ?>  </td>
                                    <td>
                                    <?php echo $course['review']; ?>  </td>
                                    <td> <a href="editCourse.php?id=<?= $course['id']; ?>" class="btn btn-info">Update</a> </td>
                                    <td> <a href="deleteCourse.php?id=<?= $course['id']; ?>" class="btn btn-danger">Delete</a> </td>
                            </tr>
                           
                   <?php }   ?>
                    </tbody>
                </table>
            </div>
            
        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>