<?php
session_start();

include('pdo.php');

if(empty($_POST['identifiant']) OR empty($_POST['password'])) {
	$_SESSION['message'] = "il manque un champs !";
	header('location: ../login.php');
} else {

	$identifiant = $_POST['identifiant'];
	$password = $_POST['password'];

	$req = $bdd->prepare("SELECT id, nom, identifiant,password FROM user WHERE identifiant = :identifiant AND password = :password");
	$req->execute(array(
		'identifiant' => $identifiant,
		'password' => $password
	));

	// on stock les informations de l'utilisateur provenant de la table dans une variable
	$resultat = $req->fetch();

	if ($resultat) {
		// on stock l'id de l'utilisateur dans une session
		$_SESSION['id'] = $resultat['id'];
		$_SESSION['message'] = "Vous etes connecté";
		header('location: ../index2.php');
	} else {
		$_SESSION['message'] = "Erreur identifiant incorrect";
		header('location: ../login.php');
	}
}
?>
