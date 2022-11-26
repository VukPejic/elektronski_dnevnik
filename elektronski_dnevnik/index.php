<?php
	include "actions/connection.php";
	if(isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
		if($_SESSION['nastavnik'] == 1) {
			header('location:nastavnik/index.php');
		} else {
			header('location:ucenik.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="id=edge">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Elektronski Dnevnik</title>
</head>
<body>

	<form class="login-form" action="actions/login.php" method="POST">
		<h1>Login</h1>
		<input type="text" name="username" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<button type="submit">Login</button>
	</form>

</body>
</html>