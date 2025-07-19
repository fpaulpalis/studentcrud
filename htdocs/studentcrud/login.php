<?php
include 'conn.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Tutorials</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
	<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "error") { ?>
			<div class="alert alert-danger text-center" role="alert">Username or password is not found.</div>
	<?php
		}
	}
	?>
	<form method="POST" action="login-action.php">
		<div class="container col-md-3 mt-5">
			<center>

				<img src="https://sis-pucu.phinma.edu.ph/image/login/logo_college.png"
					alt="PHINMA Logo"
					class="img-fluid w-50 mb-3"
					style="margin-top: 20px;">
			</center>

			<h1 class="h3 mb-3 font-weight-normal text-center">Please Sign In</h1>

			<div class="text-start">
				<label for="username" class="font-weight-bold" text-center>Username:</label>
				<input type="text" name="username" class="form-control mb-3" placeholder="Username" required>

				<label for="password" class="font-weight-bold">Password:</label>
				<input type="password" name="password" class="form-control mb-3" placeholder="Password" required>
			</div>

			<button class="btn btn-lg btn-primary btn-block w-100" name="submit" type="submit">Sign In</button>
			<a href="registration.php" class="btn btn-lg btn-success btn-block w-100 mt-2">Register</a>
		</div>
	</form>

</body>

</html>