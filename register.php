<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration | Attendance System</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form">
		<form action="validate_registration.php" method="post">
			<input type="text" placeholder="Username" name="username" required><br>
			<input type="text" placeholder="Enter Password" name="password" required><br>
			<input type="text" Placeholder="Re Enter Password" name="confirmpassword" required><br>
			<input type="submit" value="submit">
			<a href="login.php">Login</a>
		</form>
</body>
</html>