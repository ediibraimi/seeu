<?php 


	include_once('../config.php');

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
        $FullName = $_POST['FullName'];
        $occupation = $_POST['occupation'];
        $company_name = $_POST['Company_Name'];
        $PhoneNum = $_POST['PhoneNum'];
        $addres = $_POST['addres'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $Postcode = $_POST['Postcode'];

		$sql = "UPDATE users SET id=:id, FullName=:FullName, occupation=:occupation, Company_Name=:Company_Name, PhoneNum=:PhoneNum, addres=:addres, city=:city, state=:state, Postcode=:Postcode  WHERE id=:id";

		$prep = $conn->prepare($sql);
		$prep->bindParam(':FullName', $FullName);
        $prep->bindParam(':occupation', $occupation);
        $prep->bindParam(':Company_Name', $company_name);
        $prep->bindParam(':PhoneNum', $PhoneNum);
        $prep->bindParam(':addres', $addres);
        $prep->bindParam(':city', $city);
        $prep->bindParam(':state', $state);
        $prep->bindParam(':Postcode', $Postcode);
		$prep->execute();
		header("Location: teacherDashboard.php");
	}
 ?>