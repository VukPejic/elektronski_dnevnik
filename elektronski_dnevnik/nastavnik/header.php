<?php
include "../actions/connection.php";

if ($_SESSION['nastavnik'] == 0) {
	header('location:../ucenik.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<title>Nastavnik</title>
</head>
<body>
	<div class="main-menu">
		<h1>Nastavnikov Dnevnik</h1>

		<a href="index.php">Lista ucenika</a>
		<a href="noviUcenik.php">Dodaj novog ucenika</a>
		<a href="../actions/logout.php">Logout</a>
	</div>