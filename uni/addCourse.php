<?php 
include_once('config.php');

if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $category = $_POST['category'];
    $review = $_POST['review'];
    $price = $_POST['price'];

    // Check if the image is uploaded
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0)
    {
        $image = $_FILES['image']['name'];
        $tmp_image = $_FILES['image']['tmp_name'];
        $image_path = "images/" . $image; // path where you want to store the image
        move_uploaded_file($tmp_image, $image_path); // move the uploaded image to the specified path
    }
    else
    {
        $image = ''; // set a default value for the image if it's not uploaded
    }

    $sql = "INSERT INTO course(image, title, category, review, price) 
    VALUES (:image, :title, :category, :review, :price)";

    $insertCourse = $conn->prepare($sql);

    $insertCourse->bindParam(':image', $image);
    $insertCourse->bindParam(':title', $title);
    $insertCourse->bindParam(':category', $category);
    $insertCourse->bindParam(':review', $review);
    $insertCourse->bindParam(':price', $price);

    $insertCourse->execute();
    header('Location: course.php');
}
 
?>