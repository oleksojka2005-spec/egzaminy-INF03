<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hodowla świnek morskich</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<header id="baner">
	<h1>Hodowla świnek morskich - zamów 
świnkowe maluszki</h1>
</header>
<section id="left1">
	<a href="peruwianka.php">Rasa Peruwianka</a>
	<a href="american.php">Rasa American</a>
	<a href="crested.php">Rasa Crested</a>
</section>
<section id="left2">
	<img src="crested.jpg" alt="Świnka morska rasy peruwianka">
	<?php include "skrypt2.php";?> 
	<hr>
	<h2>Świnki w tym miocie</h2>
	<?php include "skrypt3b.php";?>
</section>
<section id="right">
	<h3>Poznaj wszystkie rasy świnek morskich</h3>
	<ol>
		<?php include "skrypt1.php";?>
	</ol>
</section>
<footer id="stopka">
	<p>Stronę wykonał: 00000000</p>
</footer>
</body>
</html>