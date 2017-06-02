<?php
session_name('SESSION');
session_start();
include("bdd_connect.php");
header ("Refresh: 0;URL=../www/#/page35");
// Redirection vers page_suivante.php après un délai de 5 secondes
// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée[/#]
?>

<?php
if(isset($_POST['commenter'])) {
    $validation = $_POST['user_id'];
    $comm = $_POST['comm'];

    // connexion à la base
    include("bdd_connect.php");

    $sql = $bdd->prepare("UPDATE cours_dispense
SET STATUS_ID = 3, NOTE=:comm
WHERE CD_ID =:val");
    $sql->bindParam(':val', $validation);
    $sql->bindParam(':comm', $comm);
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


if(isset($_POST['Annuler'])) {
    $validation = $_POST['user_id'];

    // connexion à la base
    include("bdd_connect.php");

    $sql = $bdd->prepare("UPDATE cours_dispense
SET STATUS_ID = 4
WHERE CD_ID =:val");
    $sql->bindParam(':val', $validation);
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
?>
