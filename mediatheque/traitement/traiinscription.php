<?php

session_start();

include('pdo.php');

if(empty($_POST['nom']) OR empty($_POST['identifiant']) OR empty($_POST['password'])) {
    $_SESSION['message'] = "il manque un champs !";
    header('location: ../inscription.php');
} else {

    $nom = $_POST['nom'];
    $identifiant = $_POST['identifiant'];
    $password = $_POST['password'];

    if (strlen($password) < 5 OR ctype_alpha($nom) == false OR strlen($identifiant) < 5) {
        $_SESSION['message'] = "Erreur lors de l'inscription";
        header('location: ../inscription.php');
    } else {

        $req = $bdd->prepare("INSERT INTO user (nom, identifiant, password) VALUES (:nom, :identifiant, :password)");
        $req->execute(array(
            'nom' => $nom,
            'identifiant' => $identifiant,
            'password' => $password
        ));

        if ($req->rowCount()) {
            $_SESSION['message'] = "Bienvenue";
            header('location: ../index2.php');
        } else {
            $_SESSION['message'] = "Erreur";
            header('location: ../inscription.php');
        }
    }
}


?>
