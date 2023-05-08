<?php 
	include "db_conn.php";
	session_start();
	echo $_SESSION['role'];
	if($_SESSION['role'] == 'admin'){
		header("Location: ../View/admin/home.php");
	}else if($_SESSION['role'] == 'student'){
		header("Location: ../View/student/home.php");
	}else if($_SESSION['role'] == 'alumni'){
		header("Location: ../View/alumni/home.php");
	}else if($_SESSION['role'] == 'staff'){
		header("Location: ../Model/staff/home.php");
	}else if($_SESSION['role'] == 'support'){
		header("Location: ../View/support/home.php");
	}

 ?>