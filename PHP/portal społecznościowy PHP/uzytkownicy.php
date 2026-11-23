<!DOCTYPE html>
<html lang="pl">
<head> 
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portal społecznościowy</title>
	<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
	<header>
		<section id="banerl">
			<h2>Nasze osiedle</h2>
		</section>
		<section id="banerp">
		 <?php 
		 $con = mysqli_connect('localhost', 'root', '', 'portal');
		 $query = mysqli_query($con, "SELECT COUNT(*) FROM `dane`;");
		 while ($row = mysqli_fetch_array($query)) {
		 	$uzytkownicy = $row['COUNT(*)'];
		 	echo "Liczba użytkowników portalu: $uzytkownicy";
		 }

			mysqli_close($con);
			 ?>
		</section>
	</header>
	<main>
<section id="lewy">
	<h3>Logowanie</h3>
	<form action="" method="POST">
		login<br>
		<input type="text" name="login"><br>
		haslo<br>
		<input type="password" name="haslo"><br>
		<button type="submit">Zaloguj</button>
	</form>
</section>
<section id="prawy">
	<h3>Wizytówka</h3>
	<div id="wizytowka">
		<?php
		$con = mysqli_connect('localhost', 'root', '', 'portal');
		if (!empty($_POST['login']) && !empty($_POST['haslo'])) {
			$login = $_POST['login'];
			$haslo = $_POST['haslo'];
			$query = mysqli_query($con, "SELECT `haslo` FROM `uzytkownicy` WHERE `login` = '$login';");
			$spr = mysqli_num_rows($query);
			if ($spr == 1) {
				$row = mysqli_fetch_array($query);
				if ($row['haslo'] == sha1($haslo)) {
					$query2 = mysqli_query($con, "SELECT login, rok_urodz, przyjaciol, hobby, zdjecie FROM `uzytkownicy` JOIN dane ON uzytkownicy.id = dane.id WHERE `login` = '$login';");
					while($row2 = mysqli_fetch_array($query2)){
						$wiek = date('Y') - $row2['rok_urodz'];
						echo "<img src='$row2[zdjecie]' alt='osoba'><h4>$row2[login]($wiek)</h4><p>hobby:$row2[hobby]</p><h1><img src='icon-on.png'>$row2[przyjaciol]</h1><br><a href='dane.html'><button class ='przycisk'>Więcej informacji</button></a>";
					}
				}else{
					echo "błędne hasło";
				}

			}else{
				echo "login nie istnieje";
			}
			
			
		}else{
			echo "wprowadź dane";
		}






		mysqli_close($con);
		?>

	</div>

</section>
</main>
<footer>
	Stronę wykonał:000000
</footer>
</body>
</html>
