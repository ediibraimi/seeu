<?php 
	
	session_start();

	include_once('config.php');

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];

		$password = $_POST['password'];

		if (empty($email) || empty($password)) {

			echo "Please fill in all fields
			";

		}
		else{

			$sql = "SELECT * FROM users WHERE email=:email";
			$selectUser = $conn->prepare($sql);


			$selectUser->bindParam(":email", $email);


			$selectUser->execute();


			$data = $selectUser->fetch();

			if ($data == false) {
				

				echo "The user does not exist
				";
			}else{

				if (password_verify($password, $data['password'])) {
					$_SESSION['id'] = $data['id'];
					$_SESSION['name'] = $data['name'];
					$_SESSION['username'] = $data['lastname'];
					$_SESSION['email'] = $data['email'];
                    $_SESSION['password'] = $data['password'];
					$_SESSION['confirm_password'] = $data['confirm_password'];
					$_SESSION['is_admin'] = $data['is_admin'];

					header('Location: uni/admin/index.php');
				}
				else{
					echo "The password is not valid
					";
				}

			}

		}


	}


 ?>