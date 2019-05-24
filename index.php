<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<section class="baner">
	
</section>
<section class="lewy">
	<?php
		$c = mysqli_connect('localhost', 'root', '', 'baza');
		$q = mysqli_query($c, "SELECT MIN(cena) AS minimum FROM `dania` WHERE typ LIKE 2");
		while($tab = mysqli_fetch_array($q)){
			echo $tab['minimum'];
		}
	?>
</section>
<section class="srodkowy">
	<?php
	$q = mysqli_query($c, "SELECT id, dania, cena FROM `dania` WHERE typ LIKE 3");
	while($tab = mysqli_fetch_array($q)) {
		echo $tab['id']." ".$tab['dania']." ".$tab['cena']."<br>";
	}
	?>
</section>
<section class="prawy">
	<?php
	$q = mysqli_query($c, "SELECT id, dania, cena FROM `dania` WHERE typ LIKE 4");
	while($tab = mysqli_fetch_array($q)) {
		echo $tab['id']." ".$tab['dania']." ".$tab['cena']."<br>";
	}
	$cl = mysqli_close($c)
	?>
</section>
<section class="stopka">
	<p>opracowal</p>
</section>
</body>
</html>
