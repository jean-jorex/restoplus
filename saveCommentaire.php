<?php


 
  include("connexion_bd.php");


    if( isset($_POST['Send']) AND !empty($_POST['Send'])  ) {

      if(!empty($_POST['NomCommentateur']) ){

        $NomCommentateur = $_POST['NomCommentateur'];

        $Commentaire = $_POST['Commentaire'];

        $msg = "";
        

            $stmt = $db->prepare("INSERT INTO commentaire( NomCommentateur, Commentaire) VALUES( :NomCommentateur, :Commentaire)");

            
            $stmt->bindParam(':NomCommentateur', $NomCommentateur);

            $stmt->bindParam(':Commentaire', $Commentaire);

        // INSERONT LES DONNEES DANS LA BASE 

        $insertIsOk = $stmt->execute();

        if($insertIsOk){
            header("Location: index.php");
        }else{
          $msg = "Echec de l'opération !";
        }
        

     } 

    }else{
      $msg = "Vos information contienne des Erreur";
}


?>
