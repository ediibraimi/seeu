<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center 
            pt-3 pb-2 mb-3 border-bottom">
              
            </div>
            <br><br>

            <h2>Courses</h2>
                      <div class="container">
                        <div class="row">
                          <div class="col-6 offset-3">
                          <form action="addCourse.php" method="POST">

                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floating-input" placeholder="Image" name="image">
                    <label for="floatingInput">Image</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floating-input" placeholder="Course Name" name="title">
                    <label for="floatingInput">Course Name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floating-input" placeholder="Category" name="category">
                    <label for="floatingInput">Category</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floating-input" placeholder="Review" name="review">
                    <label for="floatingInput">Review</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floating-input" placeholder="Price" name="price">
                    <label for="floatingInput">Course price</label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Add Course</button>
            </form>
                        </div>
                      </div>
                  </div>
            
        </main>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>