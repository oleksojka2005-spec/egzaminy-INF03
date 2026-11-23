<?php
$con = mysqli_connect("localhost", "root", "", "hodowla");
$query = mysqli_query($con,"SELECT DISTINCT swinki.data_ur, swinki.miot, rasy.rasa FROM swinki, rasy WHERE swinki.rasy_id = rasy.id AND rasy_id = 6;" );
while ($row = mysqli_fetch_assoc($query)) {
	echo "<h2>Rasa:" .$row['rasa'] ."</h2>" ."<p>Data urodzenia:" .$row['data_ur'] ."</p>" ."<p>Oznaczenie miotu:" .$row['miot'] ."</p>";
}


mysqli_close($con);
?>