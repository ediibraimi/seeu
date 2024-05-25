<?php
session_start();

include_once('../config.php');

if (isset($_POST['submit'])) {
    // Fetch the posted data and sanitize it
    $id = $_POST['id'];
    $FullName = $_POST['FullName'];
    $occupation = $_POST['occupation'];
    $Company_Name = $_POST['Company_Name'];
    $PhoneNum = $_POST['PhoneNum'];
    $addres = $_POST['addres'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $Postcode = $_POST['Postcode'];

    // Prepare the SQL statement
    $sql = "UPDATE teacher_profile SET 
                FullName = :FullName, 
                occupation = :occupation, 
                Company_Name = :Company_Name, 
                PhoneNum = :PhoneNum, 
                addres = :addres, 
                city = :city, 
                state = :state, 
                Postcode = :Postcode 
            WHERE id = :id";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':FullName', $FullName, PDO::PARAM_STR);
    $stmt->bindParam(':occupation', $occupation, PDO::PARAM_STR);
    $stmt->bindParam(':Company_Name', $Company_Name, PDO::PARAM_STR);
    $stmt->bindParam(':PhoneNum', $PhoneNum, PDO::PARAM_STR);
    $stmt->bindParam(':addres', $addres, PDO::PARAM_STR);
    $stmt->bindParam(':city', $city, PDO::PARAM_STR);
    $stmt->bindParam(':state', $state, PDO::PARAM_STR);
    $stmt->bindParam(':Postcode', $Postcode, PDO::PARAM_STR);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Teacher's details updated successfully.";
        header("Location: teacherDashboard.php"); 
        exit;
    } else {
        echo "Error updating teacher's details.";
    }
} else {
    echo "Invalid request.";
    exit;
}
?>
