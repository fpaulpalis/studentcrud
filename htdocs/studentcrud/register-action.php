<?php
include 'conn.php';

if (isset($_POST['username'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$fullname = $_POST['fullname'];

	$register = mysqli_query($conn, "INSERT INTO tbl_user (username, password, full_name) VALUES ('$username', '$password', '$fullname')");

	if ($register) {
		header("Location: registration.php?register_action=success");
	} else {
		echo error_reporting(E_ALL);
	}
}
