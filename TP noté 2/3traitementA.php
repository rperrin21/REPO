<?php   
$bdd = new PDO('mysql:host=localhost;dbname=tpnote2;charset=utf8', 'root', '');

$req = "DELETE FROM `unioneuropeenne` WHERE `unioneuropeenne`.`ID` = 25";

$bdd->query($req);

?>