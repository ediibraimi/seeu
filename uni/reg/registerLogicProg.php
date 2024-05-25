<?php
session_start();
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['surname1']) && isset($_POST['major1'])) {
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $major = $_POST['major'];
         
       

        if (empty($name) || empty($surname) || empty($major)) {
            echo "Please fill in all fields";
        } else {
            $sql = "INSERT INTO progst (name, surname1, major1) VALUES (:name, :surname, :major)";
            $insertUser = $conn->prepare($sql);
            $insertUser->bindParam(':name', $name);
            $insertUser->bindParam(':surname', $surname);
            $insertUser->bindParam(':major', $major);
            

            if ($insertUser->execute()) {
                echo "New user created successfully";
                header('Location: membership.php');
                exit;
            } else {
                echo "Error: " . $sql . "<br>";
            }

            
        }
    } else {
        echo "All fields are required!";
    }
} else {
    echo "Form not submitted!";
}
?>