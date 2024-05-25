<?php 
session_start();
include_once('config.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Please fill in all fields'); window.location.href = 'login.php';</script>";
    } else {
        $sql = "SELECT * FROM users WHERE email=:email";
        $selectUser = $conn->prepare($sql);
        $selectUser->bindParam(":email", $email);
        $selectUser->execute();
        $data = $selectUser->fetch();

        if ($data == false) {
            echo "<script>alert('The user does not exist'); window.location.href = 'login.php';</script>";
        } else {
            if (password_verify($password, $data['password'])) {
                $_SESSION['id'] = $data['id'];
                $_SESSION['name'] = $data['name'];
                $_SESSION['username'] = $data['lastname'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['password'] = $data['password'];
                $_SESSION['confirm_password'] = $data['confirm_password'];
                $_SESSION['is_admin'] = $data['is_admin'];

                $name = htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8');

                if ($_SESSION['is_admin'] == 'true') {
                    echo "<script>alert('Login successful. Welcome $name!'); window.location.href = 'admin/index.php';</script>";
                } else {
                    echo "<script>alert('Login successful. Welcome $name!'); window.location.href = 'index.php';</script>";
                }
            } else {
                echo "<script>alert('The password is not valid'); window.location.href = 'login.php';</script>";
            }
        }
    }
}
?>
