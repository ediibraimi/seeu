<?php 
    session_start();

    include_once('config.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM course WHERE id=:id";
    $selectCourse= $conn->prepare($sql);
    $selectCourse->bindParam(':id', $id);
    $selectCourse->execute();

    $courseData = $selectCourse ->fetch();
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

</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Edit user details</h1>   
                <div class="table-responsive">
                    <form action="updateCourse.php" method="post">

                        <div class="form-floating mb-2">
                        <label for="floatingInput">Id</label>    
                        <input type="number" readonly class="form-control" name="id" id="floatingInput" 
                            value="<?php echo $courseData['id'] ?>">
                            
                        </div>
                        <div>
                        <label for="floatingInput">Image</label>     
                        <input type="file" class="form-control" id="floating-input" placeholder="Image" name="image"
                             value="<?php echo $courseData['image'] ?>">
                            
                         </div>

                        
                        <div class="form-floating mb-2">
                        <label for="floatingInput">Course Name</label>
                            <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Course name"
                            value="<?php echo $courseData['title'] ?>">
                            
                        </div>

                        <div class="form-floating mb-2">
                        <label for="floatingInput">Category</label>
                            <input type="text" class="form-control" name="category" id="floatingInput" placeholder="Category "
                            value="<?php echo $courseData['category'] ?>">
                            
                        </div>

                        <div class="form-floating mb-2">
                        <label for="floatingInput">Review</label>
                            <input type="number" class="form-control" name="review" id="floatingInput" placeholder="review"
                            value="<?php echo $courseData['review'] ?>">
                            
                        </div>
                        <div class="form-floating mb-2">
                        <label for="floatingInput">Price</label>

                            <input type="number" class="form-control" name="price" id="floatingInput" placeholder="price"
                            value="<?php echo $courseData['price'] ?>">
                        </div>
                    </div>

                        <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit1">Change</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>