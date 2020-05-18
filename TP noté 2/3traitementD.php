<?php   
$bdd = new PDO('mysql:host=localhost;dbname=tpnote2;charset=utf8', 'root', '');

echo "nouveau ";
$req1 = "SELECT MAX(Superficie) FROM unioneuropeenne";
$resultat=$bdd->query($req1);

foreach($resultat as $row) {
	echo  "maximum ". $row['MAX(Superficie)'];
	
}
foreach($bdd->query('SELECT MIN(Superficie) FROM unioneuropeenne') as $row) {
	echo "<tr>";
	echo "<td>" ."minimum". $row['MIN(Superficie)'] . "</td>";
	echo "</tr>";
}

?>