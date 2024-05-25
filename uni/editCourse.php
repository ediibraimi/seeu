<?php 
    session_start();

    include_once('config.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM courses WHERE id=:id";
    $selectCourses = $conn->prepare($sql);
    $selectCourses->bindParam(':id', $id);
    $selectCourses->execute();

    $courseData = $selectCourses ->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Course</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body> 
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <h1>Edit user details</h1>   
                <div class="table-responsive">
                    <form action="updateCourse.php" method="post">

                        <div class="form-floating mb-2">
                            <input type="number" readonly class="form-control" name="id" id="floatingInput" 
                            value="<?php echo $courseData['id'] ?>">
                            <label for="floatingInput">Id</label>
                        </div>
                        <div>
                             <input type="file" class="form-control" id="floating-input" placeholder="Image" name="image"
                             value="<?php echo $courseData['image'] ?>">
                            <label for="floatingInput">Image</label>
                         </div>

                        
                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="title" id="floatingInput" placeholder="Course name"
                            value="<?php echo $courseData['title'] ?>">
                            <label for="floatingInput">Course Name</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="text" class="form-control" name="category" id="floatingInput" placeholder="Category "
                            value="<?php echo $courseData['category'] ?>">
                            <label for="floatingInput">Category</label>
                        </div>

                        <div class="form-floating mb-2">
                            <input type="number" class="form-control" name="review" id="floatingInput" placeholder="review"
                            value="<?php echo $courseData['review'] ?>">
                            <label for="floatingInput">Review</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="number" class="form-control" name="price" id="floatingInput" placeholder="price"
                            value="<?php echo $courseData['price'] ?>">
                            <label for="floatingInput">Price</label>
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