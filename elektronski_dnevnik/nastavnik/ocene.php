<?php include "header.php"; ?>

<div class="ocene">
<h3>Ucenikov ID: <?php echo $_GET['ucenik_id']; ?></h3>

<br>

<a href="dodajOcene.php?ucenik_id=<?php echo $_GET['ucenik_id'] ?>">Dodaj ocenu</a>

<br><br>

<?php
	$ucenik_id = $mysqli->real_escape_string(strip_tags((int)$_GET['ucenik_id']));

	$sql = "SELECT * FROM ocene WHERE ucenik_id = " . $ucenik_id;
	$results = $mysqli->query($sql);

?>
	<table class="table">
		<tr>
			<th>Predmet</th>
			<th>Ocena</th>
		</tr>

		<?php
		while ($row = $results->fetch_assoc()) {
			?>
			<tr>
				<td><?php echo $row['predmet']; ?></td>
				<td><?php echo $row['ocena']; ?></td>
			</tr>
			<?php
		}
		?>
	</table>
</div>


<?php include "footer.php"; ?>