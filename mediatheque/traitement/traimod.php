<?php

session_start();

include('pdo.php');


if(isset($_POST['nom']) OR isset($_POST['realisateur']) OR isset($_POST['duree']) OR isset($_POST['resume']) OR isset($_POST['categorie'])){

$req=$bdd->prepare("SELECT * FROM film WHERE id=:id");
$req->execute(array('id'=>$_POST['id']));
$donnee=$req->fetch();

if($_POST['id'] == $donnee['id']){

$reqnom=$bdd->prepare("UPDATE film SET nom=:nom, realisateur=:realisateur, duree=:duree, resume=:resume, categorie=:categorie WHERE id=:id");
$reqnom->execute(array('nom'=>$_POST['nom'], 'realisateur'=>$_POST['realisateur'], 'duree'=>$_POST['duree'], 'resume'=>$_POST['resume'], 'categorie'=>$_POST['categorie'], 'id'=>$_POST['id']));

$_SESSION['message'] = "Le film à bien été ajouté";

header('location: ../index2.php');
}

}
?>
