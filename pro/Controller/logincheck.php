<?php  

//login login 

	include 'db_conn.php';
		
	
		$email = $_POST['email'];
		$password = $_POST['password'];
		$role = $_POST['role'];
		$sql = mysqli_query($conn,"SELECT * from $role where `Email`='$email' ");
		

		if ($row=mysqli_fetch_array($sql)) {
			// code...

			if ($password==$row['Password']) {
				// code...
				if ($sql) {
				// code...
				session_start();
				
				$_SESSION['name'] = $row['FirstName'];
				$_SESSION['role'] = $role;
				header("Location: redirect.php");
				exit();
			}

				

			}
			else {
				echo "invalid password";
			}
		}else{
			echo "invalid email";
		}
	


	
/*
session_start();
include "db_conn.php";
$email =$_POST['email'];
$password = $_POST['password'];
$role = $_POST['role'];
if (empty($email)) {
	// code...
	header("Location: login.php?error=email is required");
	exit();
}else if (empty($password)) {
	// code...
	header("Location: login.php?error=password is required");
	exit();
}

$sql = "SELECT * FROM $role WHERE Email = '$email' AND Password = '$password'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result) === 1){
	$row = mysqli_fetch_assoc($result);
	if ($row['email'] == $email) {
		// code...
		echo "logged in";
		$_SESSION['email'] = $row['email'];
		$_SESSION['password'] = $row['password'];
		$_SESSION['role'] = $row['role'];
	}else{
		header("Location: login.php?error=incorrect password or email");
		exit();
	}
}else{
	header("Location: login,php");
}**/