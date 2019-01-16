<?php

session_start();

$bdd = new PDO('mysql:host=localhost;dbname=commentaire;charset=utf8','root','');

if(empty($_POST['pseudo']) OR empty($_POST['commentaire']) OR empty($_POST['note'])) {
    $_SESSION['message'] = "il manque un champs !";
    header('location: ../commentaire.php');
} else {
    $pseudo = $_POST['pseudo'];
    $commentaire = $_POST['commentaire'];
    $note= $_POST['note'];

    if($note>5){
        $_SESSION['message'] = "Note trop haute";
        header('location: ../commentaire.php');
        die();
      }



        $req = $bdd->prepare("INSERT INTO commentaire (pseudo, commentaire, note) VALUES (:pseudo, :commentaire, :note)");
        $req->execute(array(
            'pseudo' => $pseudo,
            'commentaire' => $commentaire,
            'note' => $note,
        ));

        if ($req->rowCount() > 0) {
            $_SESSION['message'] = "Commentaire ajouté";

            header('location: ../commentaire.php');
        } else {
            $_SESSION['message'] = "Erreur";
            header('location: ../commentaire.php');
        }

}

?>
