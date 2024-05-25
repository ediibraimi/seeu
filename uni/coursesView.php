<?php session_start(); ?>

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
  <style>
    .card {
  border: none;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.card-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  height: 40px;
  padding: 10px;
  font-size: 16px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.form-control:focus {
  border-color: #337ab7;
  box-shadow: 0 0 5px rgba(51, 122, 183, 0.3);
}

.btn-primary {
  background-color: #337ab7;
  border-color: #337ab7;
  color: #fff;
  height: 40px;
  padding: 0 20px;
  font-size: 16px;
  border-radius: 5px;
}

.btn-primary:hover {
  background-color: #286090;
  border-color: #286090;
}
  </style>
</head>
<body>
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2 text-center">Add Course</h1>
    </div>
    <br><br>

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