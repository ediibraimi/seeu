<?php
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve POST data
    $fullName = $_POST['Full_Name'];
    $occupation = $_POST['occupation'];
    $companyName = $_POST['Company_Name'];
    $phone = $_POST['PhoneNum'];
    $address = $_POST['addres'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $linkedin = $_POST['linkedin'];
    $facebook = $_POST['facebook'];
    $twitter = $_POST['twitter'];
    $instagram = $_POST['instagram'];

    try {
        // Prepare the SQL statement
        $sql = "INSERT INTO teacher_profile (FullName, occupation, Company_Name, phoneNum, addres, city, state, postcode, linkedin, facebook, twitter, instagram) VALUES (:FullName, :occupation, :Company_Name, :PhoneNum, :address, :city, :state, :postcode, :linkedin, :facebook, :twitter, :instagram)";
        $stmt = $conn->prepare($sql);

        // Bind parameters to statement
        $stmt->bindParam(':FullName', $fullName);
        $stmt->bindParam(':occupation', $occupation);
        $stmt->bindParam(':Company_Name', $companyName);
        $stmt->bindParam(':PhoneNum', $phone);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':state', $state);
        $stmt->bindParam(':postcode', $postcode);
        $stmt->bindParam(':linkedin', $linkedin);
        $stmt->bindParam(':facebook', $facebook);
        $stmt->bindParam(':twitter', $twitter);
        $stmt->bindParam(':instagram', $instagram);

        // Execute the prepared statement
        if ($stmt->execute()) {
            echo "New user created successfully";
            header('Location: login.php');
            exit;
        } else {
            echo "Error: Unable to execute the query.";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>
