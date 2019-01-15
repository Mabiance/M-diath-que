

 <?php

 session_start();

 include('pdo.php');

 	 $reponse=$bdd->prepare("SELECT id FROM film WHERE id = :id ");

   $reponse->execute(array(
     'id' => $_GET['id']
   ));
   $donnee = $reponse->fetch();

 	 if($donnee)
 	 {

 		 $reponse2 =$bdd->query('DELETE FROM film WHERE id = \''.$donnee['id'].'\' ');

 		 $reponse2->closeCursor();
     $_SESSION['message'] = 'Le film '.$donnee['nom'].' à été supprimé de la base de données';
     header('location: ../supprimer.php');
 	 }

 ?>
