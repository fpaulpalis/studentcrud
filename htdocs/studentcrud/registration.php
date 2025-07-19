<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>

	<?php
	if (isset($_GET['register_action'])) {
		if ($_GET['register_action'] == "success") { ?>
			<div class="alert alert-success text-center" role="alert">Successfully registered</div>
	<?php
		}
	}
	?>

	<form method="POST" action="register-action.php">
		<div class="container col-md-3 mt-5">
			<center>			<!-- Larger logo using Bootstrap class -->
			<img src="https://sis-pucu.phinma.edu.ph/image/login/logo_college.png"
				alt="PHINMA Logo"
				class="img-fluid w-50 mb-3"
				style="margin-top: 20px;">
			</center>
			<h1 class="h3 mb-3 font-weight-normal text-center">Create U</h1>
			<h1 class="h3 mb-3 font-weight-normal text-center">Add User</h1>
			<label for="username" class="font-weight-bold mr-auto">Username:</label>
			<input type="text" name="username" class="form-control mb-3" placeholder="Username" required="">

			<label for="password" class="font-weight-bold mr-auto">Password:</label>
			<input type="password" name="password" class="form-control mb-3" placeholder="Password" required="">

			<label for="fullname" class="font-weight-bold mr-auto">Full Name:</label>
			<input type="text" name="fullname" class="form-control mb-3" placeholder="Full Name:" required="">

			<button class="btn btn-lg btn-success btn-block w-100" name="submit" type="submit">Register</button>
		</div>
	</form>
	<p class="text-center">Already a member? Click <a href="login.php">here</a> to login. </p>
</body>

</html>