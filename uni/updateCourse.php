<?php
include_once('config.php');

if (isset($_POST['submit1'])) {
    $id = $_POST['id'];
    $image = $_POST['image'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $review = $_POST['review'];
    $price = $_POST['price'];

    // Validate input data
    if (empty($title) || empty($category) || empty($review) || empty($price)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Prepare the update query
    $sql = "UPDATE course SET image=:image, title=:title, category=:category, review=:review, price=:price WHERE id=:id";

    $prep = $conn->prepare($sql);
    $prep->bindParam(':image', $image);
    $prep->bindParam(':title', $title);
    $prep->bindParam(':category', $category);
    $prep->bindParam(':review', $review);
    $prep->bindParam(':price', $price);
    $prep->bindParam(':id', $id);

    // Execute the query
    if ($prep->execute()) {
        header('Location: coursesView.php');
        exit;
    } else {
        echo "Error updating course: " . $prep->errorInfo()[2];
    }
}
?>