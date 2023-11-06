<?php
	$Firstname = $_POST['Firstname'];
	$Lastname = $_POST['Lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	
	$city = $_POST['city'];

	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Firstname, Lastname, gender, email,city) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $Firstname, $Lastname, $gender, $email,$city);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>