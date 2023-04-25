<?php 

	include 'db_conn.php';
	$full = $_POST['name'];
	$xname = explode(' ',$full);
	$fname =$xname[0];
	$lname = Ltrim($full, $fname.' ');
	$email = $_POST['email'];
	$address = $_POST['address'];
	$bdate = $_POST['bdate'];
	$password = $_POST['password'];
	//$password = md5($password);
	$jobtitle = $_POST['jobtitle'];
	$phonenumber = $_POST['phonenumber'];
	$role = $_POST['role'];
	$q = "INSERT INTO $role (`ID`, `FirstName`, `LastName`, `Email`, `Address`, `BirthDate`, `Password`, `PhoneNumber`, `JobTitle`) VALUES (NULL, '$fname', '$lname', '$email', '$address', '$bdate', '$password','$phonenumber', '$jobtitle');";
	$result = mysqli_query($conn,$q);
	if ($result) {
		// code...
		session_start();
		$_SESSION['name'] = $fname;
		$_SESSION['role'] = $role;
		header("Location: redirect.php");

	}else{
		echo "data failed to be inserted";
	}
 ?>