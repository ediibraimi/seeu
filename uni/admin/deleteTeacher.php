<?php 
	
	include_once('../config.php');

	$id = $_GET['id'];
	$sql = "DELETE FROM teacher_profile WHERE id=:id";
	$prep = $conn->prepare($sql);
	$prep->bindParam(':id',$id);
	$prep->execute();

	header("Location: teacherDashboard.php");
 ?>