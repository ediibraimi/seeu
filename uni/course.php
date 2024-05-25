<?php
    session_start();

    include_once('config.php');

    if(empty($_SESSION['username'])) {
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="fa/css/all.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
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