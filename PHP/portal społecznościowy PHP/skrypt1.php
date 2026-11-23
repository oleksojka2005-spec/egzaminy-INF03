<?php
$con = mysqli_connect('localhost', 'root', '', 'portal');
$query = mysqli_query($con, "SELECT COUNT(*) FROM `dane`; ");
while ($row = mysqli_fetch_row($query)) {
	echo "<h5>Liczba użytkowników portalu: $row[0] </h5>";
}





mysqli_close($con);
?>