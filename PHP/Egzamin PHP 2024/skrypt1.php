<?php
$con = mysqli_connect("localhost", "root", "", "hodowla") or die("błąd połączenia");
$zapytanie = "SELECT rasa FROM `rasy`;";
$wynki = mysqli_query($con, $zapytanie);

while ($rasa = mysqli_fetch_assoc($wynki)) {
	echo "<li>"  .$rasa['rasa'] ;
}






mysqli_close($con);
?>