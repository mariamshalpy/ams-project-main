<?php 
	include "db_conn.php";
	session_start();
	echo $_SESSION['role'];
	if($_SESSION['role'] == 'admin'){
		header("Location: ../Model/admin/home.php");
	}else if($_SESSION['role'] == 'student'){
		header("Location: ../Model/student/home.php");
	}else if($_SESSION['role'] == 'alumni'){
		header("Location: ../Model/alumni/home.php");
	}else if($_SESSION['role'] == 'staff'){
		header("Location: ../Model/staff/home.php");
	}else if($_SESSION['role'] == 'support'){
		header("Location: ../Model/support/home.php");
	}

 ?>