<?php

session_start();

include('pdo.php');


    $nom = $_POST['nom'];
    $realisateur = $_POST['realisateur'];
    $duree = $_POST['duree'];
    $resume= $_POST['resume'];
    $categorie= $_POST['categorie'];
    $photo= $_POST['photo'];


        $req = $bdd->prepare("INSERT INTO film (nom, realisateur, duree, resume, categorie, photo) VALUES (:nom, :realisateur, :duree, :resume, :categorie, :photo)");
        $req->execute(array(
            'nom' => $nom,
            'realisateur' => $realisateur,
            'duree' => $duree,
            'resume' => $resume,
            'categorie' => $categorie,
            'photo' => $photo
        ));

        if ($req->rowCount()) {
            $_SESSION['message'] = "Le film à bien été ajouté";
            
            header('location: ../index2.php');
        } else {
            $_SESSION['message'] = "Erreur";
            header('location: ../index2.php');
        }



?>
