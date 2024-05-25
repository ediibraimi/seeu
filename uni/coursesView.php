<?php
include_once('config.php');

$sql = "SELECT * FROM courses";
$courses = $conn->prepare($sql);
$courses->execute();
$courses_data = $courses->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- HTML Code -->
<div class="row">
    <?php foreach($courses_data as $course) { ?>
    <div class="col-md-6 col-lg-4 col-sm-6 m-b30">
        <div class="cours-bx">
            <div class="action-box">
                <img src="assets/images/courses/<?php echo $course['image']; ?>" alt="">
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="info-bx text-center">
                <h5><a href="#"><?php echo $course['title']; ?></a></h5>
                <span><?php echo $course['category']; ?></span>
            </div>
            <div class="cours-more-info">
                <div class="review">
                    <span><?php echo $course['review']; ?> Review</span>
                    <ul class="cours-star">
                        <?php for($i=0; $i<$course['review']; $i++) { ?>
                        <li class="active"><i class="fa fa-star"></i></li>
                        <?php } ?>
                    </ul>
                </div>
                <div class="price">
                    <?php if($course['price'] == 0) { ?>
                    <h5 class="free">Free</h5>
                    <?php } else { ?>
                    <del>$190</del>
                    <h5>$<?php echo $course['price']; ?></h5>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
</body>
</html>