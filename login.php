<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login | Attendance System</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form">
		<form action="validate_login.php" method="post">
			<input type="text" placeholder="Username" name="username" required><br>
			<input type="Password" placeholder="Password" name="password" required><br>
			<input type="submit" value="login"><br>
			<a href="register.php">Sign up</a>
		</form>
		</div>
</body>
</html>