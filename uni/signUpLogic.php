<?php
session_start();
include_once('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
       

        if (empty($name) || empty($username) || empty($email) || empty($password)) {
            echo "Please fill in all fields";
        } else {
            $sql = "INSERT INTO users (name, username, email, password) VALUES (:name, :username, :email, :password)";
            $insertUser = $conn->prepare($sql);
            $insertUser->bindParam(':name', $name);
            $insertUser->bindParam(':username', $username);
            $insertUser->bindParam(':email', $email);
            $insertUser->bindParam(':password', $password);

            if ($insertUser->execute()) {
                echo "New user created successfully";
                header('Location: login.php');
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