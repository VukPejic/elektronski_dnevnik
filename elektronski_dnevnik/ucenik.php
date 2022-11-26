<?php
include "actions/connection.php";
if ($_SESSION['nastavnik'] == 1) {
	header('location:nastavnik/index.php');
}

?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Ucenik</title>
</head>
<body>
<a href="actions/logout.php">Logout</a>

<br><br>

<form style="background-color: #fff; padding: 38px;" method="POST" id="domaciUpload" enctype="multipart/form-data" action="actions/domaci.php">
	<h1>Uploaduj domaci</h1>
	<input type="file" name="domaci">
	<button type="submit" id="uploadBtn">Uploaduj</button>
</form>

<div class="textBg" style="background-color: rgba(255, 255, 255, 0.7); padding: 3px; max-width: 200px; font-size: 16px;">
<h1>Tvoje ocene</h1>
</div>

<table class="table">
	<tr>
		<th>Predmet</th>
		<th>Ocena</th>
	</tr>

	<?php
	$sql = "SELECT * FROM ocene WHERE ucenik_id =" . $_SESSION['user_id'];
	$result = $mysqli->query($sql);

	while ($row = $result->fetch_assoc()) {
		?>
		<tr>
			<td><?php echo $row['predmet']; ?></td>
			<td><?php echo $row['ocena']; ?></td>
		</tr>
		<?php
	}
	?>
</table>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>