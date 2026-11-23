<?php
$con = mysqli_connect("localhost", "root", "", "hodowla");
$wynik = mysqli_query($con, "SELECT `imie`, `cena`, `opis` FROM `swinki` WHERE rasy_id = 6;");
while ($row = mysqli_fetch_assoc($wynik)) {
	echo "<h3>" .$row['imie'] ."-" .$row['cena'] ."zł" ."</h3>" ."<p>" .$row['opis'] ."</p>";
}




mysqli_close($con);

?>