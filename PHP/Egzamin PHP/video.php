<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Video On Demand</title>
	<link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
	<header>
		<section id="lewy">
			<h1>Internetowa wypożyczalnia filmów</h1>
		</section>
		<section id="prawy">
			<table>
				<tr>
				<td>Kryminał</td>
				<td>Horror</td>
				<td>Przygodowy</td>
				</tr>
				<tr>
					<td>20</td>
					<td>30</td>
					<td>20</td>
				</tr>
			</table>
		</section>
	</header>
	<section id="polecamy">
		<h3>Polecamy:</h3>
		<div id="skrypt1">
		<?php
		skrypt1()


		?>
		</div>
	</section>
	<section id="filmy_fantastyczne">
		<h3>Filmy fantastyczne</h3>
		<div id="skrypt2">
		<?php
		skrypt2()

		?>
	</div>
	</section>
	<footer>
		<form action="" method="POST">
			Usuń fiml nr:<input type="number" name="numer">
			<button type="submit">Usuń fiml</button>
		</form>
		Stronę wykonał: <a href="mailto:ja@poczta.com">00000000</a>
	</footer>


</body>
<?php

function skrypt1()
{
	$con = mysqli_connect('localhost', 'root', '', 'dane3');
	$query = mysqli_query($con, "SELECT `id`,`nazwa`, `opis`, `zdjecie`FROM `produkty` WHERE `id`= '18' OR id = '22' OR id = '23' OR id = '25';");
	while ($row = mysqli_fetch_array($query)) {
		echo "<div id='film'><h4>$row[id].$row[nazwa]</h4><img src='$row[zdjecie]' alt='film'><p>$row[opis]</p></div>";
	}




mysqli_close($con);
}
function skrypt2(){
	$con = mysqli_connect('localhost', 'root', '', 'dane3');
	$query = mysqli_query($con, "SELECT `id`, `nazwa`, `opis`, `zdjecie` FROM `produkty` WHERE `Rodzaje_id` = '12';");
	while ($row = mysqli_fetch_array($query)) {
		echo "<div id='film'><h4>$row[id].$row[nazwa]</h4><img src='$row[zdjecie]' alt='film'><p>$row[opis]</p></div>";
	}






	mysqli_close($con);
}

?>
<?php
$con = mysqli_connect('localhost', 'root', '', 'dane3');
if (@$_POST['numer'] != "") {
	$numer = $_POST['numer'];
	mysqli_query($con, "DELETE FROM produkty WHERE id= '$numer';");
}


mysqli_close($con);
?>
</html>