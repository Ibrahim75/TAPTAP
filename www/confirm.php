<?php
session_name('SESSION');
session_start();
include("bdd_connect.php");
header ("Refresh: 0;URL=../www/#/Confirmation");
// Redirection vers page_suivante.php après un délai de 5 secondes
// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée[/#]
?>

<?php
if(isset($_POST['Confirmer'])) {
    $adresse_mailconnect = $_POST['nom_prof'];
    $mot_de_passeconnect = $_POST['prenom_prof'];
    $mat = $_POST['mat'];
    $prix = $_POST['prix2'];
    $id = $_POST['id'];
    $date = $_POST['date'];
    $nbrheur = $_POST['nbrheur'];
    $prenomelev = $_SESSION['PRENOM'].' '.$_SESSION['NOM'];


// On vérifie si les champs sont vides
    if ($prix == 'a') {
        echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
    } // Aucun champ n'est vide, on peut enregistrer dans la table
    else {
        // connexion à la base
        include("bdd_connect.php");


        // on écrit la requête sql
        // $sql = "INSERT INTO users(id, NOM, PRENOM,MAIL) VALUES('','$nom','$prenom','$email')";
        // $sql = $bdd->prepare("INSERT INTO users(USER_ID, NOM, PRENOM,MAIL) VALUES('','$nom','$prenom','$email')")
        //  or exit(print_r($bdd->errorInfo()));

        $sql = $bdd->prepare("INSERT INTO cours_dispense(CD_ID,USER_ID_PROF, ELEVE_NAME, MATIERE_PRIX,NBR_HEURE,START_DATE,STATUS_ID) VALUES('',:id,:nom,:matiere,:nbr,:dates,'1')");
        $sql->bindParam(':nom', $prenomelev);
        $sql->bindParam(':matiere', $mat);
        $sql->bindParam(':id', $id);
        $sql->bindParam(':dates', $date);
        $sql->bindParam(':nbr', $nbrheur);
        // on insère les informations du formulaire dans la table
        //  mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());

        $sql->execute();
        // on affiche le résultat pour le visiteur


        $destinataire = 'jjonathan94170@gmail.com';
        echo "Ce script envoie un mail à $destinataire";
        mail($destinataire, 'test email 1', 'merci pour ton tutoriel');


        echo '

<div>
   <p>
      <h1>Redirection automatique</h1>
   </p>
</div>
';


        mysql_close();  // on ferme la connexion
    }
}
?>
