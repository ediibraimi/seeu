<?php 
include_once('config.php');

if(isset($_POST['submit']))
{
    $image = $_POST['image'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $review = $_POST['review'];
    $price = $_POST['price'];

        $sql = "INSERT INTO course(image, title, category, review, price) 
        VALUES (:image, :title, :category, :review, :price)";

        $insertCourse = $conn->prepare($sql);

        $insertCourse->bindParam(':image', $image);
        $insertCourse->bindParam(':title', $title);
        $insertCourse->bindParam(':category', $category);
        $insertCourse->bindParam(':review', $review);
        $insertCourse->bindParam(':price', $price);

        $insertCourse->execute();
        header('Location: coursesView.php');
}
 
?>