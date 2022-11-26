<?php
include "header.php";
?>

<form class="register-form" action="actions/register.php" method="POST">
	<h1>Dodaj ucenika</h1>
	<input type="text" name="username" placeholder="username">
	<input type="email" name="email" placeholder="email">
	<input type="password" name="password" placeholder="password">
	<button type="submit">Register</button>
</form>

<?php include "footer.php" ?>