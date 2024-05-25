<?php
include_once('../config.php');
session_start();

$FullName = $_POST['FullName'];
$occupation = $_POST['occupation'];
$company_name = $_POST['Company_Name'];
$PhoneNum = $_POST['PhoneNum'];
$addres = $_POST['addres'];
$city = $_POST['city'];
$state = $_POST['state'];
$Postcode = $_POST['Postcode'];

echo "1";

// Check if any field is empty
if (
    empty($FullName) || empty($occupation) || empty($company_name) || empty($PhoneNum) ||
    empty($addres) || empty($city) || empty($state) || empty($Postcode)
) {
    echo "Please fill in all fields";
} else {
    // Prepare the SQL statement
    $sql = "INSERT INTO teacher_profile (FullName, occupation, Company_Name, PhoneNum, addres, city, state, Postcode) 
            VALUES (:FullName, :occupation, :Company_Name, :PhoneNum, :addres, :city, :state, :Postcode)";
    $insertUser = $conn->prepare($sql);

    // Bind parameters to statement
    $insertUser->bindParam(':FullName', $FullName);
    $insertUser->bindParam(':occupation', $occupation);
    $insertUser->bindParam(':Company_Name', $company_name);
    $insertUser->bindParam(':PhoneNum', $PhoneNum);
    $insertUser->bindParam(':addres', $addres);
    $insertUser->bindParam(':city', $city);
    $insertUser->bindParam(':state', $state);
    $insertUser->bindParam(':Postcode', $Postcode);

    if ($insertUser->execute()) {
        echo "New user created successfully";
        header('Location: index.php');
        exit;
    } else {
        echo "Error: Unable to execute the query.";
    }
}
