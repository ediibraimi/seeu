<?php 
    include_once('config.php');

    if(isset($_POST['submit1'])) {
        $id = $_POST['id'];
        $image = $_POST['image'];
        $title = $_POST['title'];
        $category = $_POST['category'];
        $review = $_POST['review'];
        $price = $_POST['price'];

        $sql = "UPDATE courses SET id=:id, image=:image, title=:title, category=:category, review=:review, price=:price WHERE id=:id";

        $prep = $conn->prepare($sql);
        $prep->bindParam(':id', $id);
        $prep->bindParam(':image', $image);
        $prep->bindParam(':title', $title);
        $prep->bindParam(':category', $category);
        $prep->bindParam(':review', $review);
        $prep->bindParam(':price', $price);

        $prep->execute();
        header('Location: course.php');
    }
?>