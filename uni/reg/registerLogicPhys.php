<?php
session_start();
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name2']) && isset($_POST['surname2']) && isset($_POST['major2'])) {
        $name = $_POST['name2'];
        $surname = $_POST['surname2'];
        $major = $_POST['major2'];
         
       

        if (empty($name) || empty($surname) || empty($major)) {
            echo "Please fill in all fields";
        } else {
            $sql = "INSERT INTO physst (name2, surname2, major2) VALUES (:name, :surname, :major)";
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