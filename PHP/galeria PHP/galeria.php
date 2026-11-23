<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeria</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<header>
	<h1>Zdjęcia</h1>
</header>
<main>
	<section id="lewy">
		<h2>Tematy zdjęć</h2>
		<ol>
			<li>Zwierzęta</li>
			<li>Krajobrazy</li>
			<li>Miasta</li>
			<li>Przyroda</li>
			<li>Samochody</li>
		</ol>
	</section>
	<section id="srodkowy"> 
		<?php  skrypt1();  ?>
	</section>
	<section id="prawy">
		<h2>Najbardziej lubiane</h2>
		<?php skrypt2(); ?>
		<strong>Zobacz wszystkie nasze zdjęcia</strong>

	</section>
</main>
<footer>
	<h5>Stronę wykonał: 0000000</h5>
</footer>
</body>
</html>
<?php
function skrypt1()
{
	$con = mysqli_connect('localhost', 'root', '', 'galeria');
	$query = mysqli_query($con, "SELECT plik, tytul, polubienia, imie, nazwisko FROM `zdjecia` JOIN autorzy ON autorzy.id = autorzy_id ORDER BY nazwisko;");

	while ($row = mysqli_fetch_array($query)) {
		
		if ($row['polubienia'] > '40') {
			echo "<div class='zdjecie'><img src='$row[plik]' alt='zdjęcie'><h3>$row[tytul]</h3><p>Autor: $row[imie] $row[nazwisko]<br> Wiele osób polubiło ten obraz</p><a href='$row[plik]' download>Pobierz</a></div>";
		}else {
			echo "<div class='zdjecie'><img src='$row[plik]' alt='zdjęcie'><h3>$row[tytul]</h3><p>Autor: $row[imie] $row[nazwisko]</p><a href='$row[plik]' download>Pobierz</a></div>";
		}



	}

	mysqli_close($con);
}
function skrypt2()
{
	$con = mysqli_connect('localhost', 'root', '', 'galeria');
	$query = mysqli_query($con, "SELECT tytul, plik FROM `zdjecia` WHERE polubienia >= 100;");
	$row = mysqli_fetch_array($query);
	echo "<img src='$row[plik]' alt='$row[tytul]'>";


	mysqli_close($con);
}




?>