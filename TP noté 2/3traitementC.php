<?php   
$bdd = new PDO('mysql:host=localhost;dbname=tpnote2;charset=utf8', 'root', '');

$req = "SELECT * FROM `unioneuropeenne` ORDER BY `unioneuropeenne`.`Superficie` ASC";
$resultat=$bdd->query($req);


foreach ($resultat as $row){
	echo $row["Superficie"]."  ";

}

?>