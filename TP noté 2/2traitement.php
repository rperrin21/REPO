<?php
	$numero = isset($_POST["numero"])? $_POST["numero"] : "";
	$nom = isset($_POST["nom"])? $_POST["nom"] : "";
	$age = isset($_POST["age"])? $_POST["age"] : "";
	$classe = isset($_POST["classe"])? $_POST["classe"] : "";
	$statut = isset($_POST["statut"])? $_POST["statut"] : "";
	$erreur = "";

	$vide="il manque :";
	$prixinit=525;
	$reduc=1;
	$augmentation=1;
	$statut=1;
	$reductot;

	if ($numero == ""){
		$erreur .= "Numéro client est vide.<br>";
	}
	if ($nom == ""){
		$erreur .= "Nom est vide.<br>";
	}
	if ($age == ""){
		$erreur .= "Age est vide.<br>";
	}
	if ($classe == ""){
		$erreur .= "Classe du client est vide.<br>";
	}
	if ($statut == ""){
		$erreur .= "Statut client est vide.<br>";
	}
	if ($erreur == "") {
		echo "Le formulaire est valide.<br>";
	} 
	else
	{
		echo "Erreur : $erreur";
	}

	if($_POST["age"] >= 0 && $_POST["age"] <= 3)
	{
		$vide .= "rabais 50% ";
		$reduc=0.5;

	}
	if(($_POST["age"] >= 4 && $_POST["age"] <= 5) || ($_POST["age"] >= 60))
	{
		$vide .= "rabais 20% ";
		$reduc=0.2;
	}
	if($_POST["classe"] == "Affaire")
	{
		$augmentation=2.2;
	}
	if($_POST["classe"] == "Première")
	{
		$augmentation=3;
	}
	if($_POST["statut"] == "Fidélité")
	{
		$statut=0.025;
	}
	if($_POST["statut"] == "VIP")
	{
		$statut=0.08;
	}

	$prixinter = ($prixinit*$augmentation)-($prixinit*$augmentation*$reduc);
	$prixfinal = $prixinter - $prixinter*$statut;
	
	echo "Vous êtes le client numéro $_POST[numero] vous êtes $_POST[nom]<br>";
	echo " Vous allez payer $prixfinal €<br>";

?>
