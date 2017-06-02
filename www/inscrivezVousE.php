<?php
header ("Refresh: 0;URL=../www/#/connexion.html");
// Redirection vers page_suivante.php après un délai de 5 secondes
// durant lesquelles la page actuelle (page_premiere.php, par exemple) est affichée[/#]
?>

<?php
// On commence par récupérer les champs
if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['email']))      $email=$_POST['email'];
else      $email="";

if(isset($_POST['password']))      $password=$_POST['password'];
else      $email="";

if(isset($_POST['phone']))      $phone=$_POST['phone'];
else      $phone="";

if(isset($_POST['lieu']))      $phone=$_POST['lieu'];
else      $lieu="";


// On vérifie si les champs sont vides
if(empty($nom) OR empty($prenom) OR empty($email) OR empty($phone) OR empty($password) )
{
    echo '<font color="red">veuillez tout remplir</font>';
}

// Aucun champ n'est vide, on peut enregistrer dans la table
else
{
    // connexion à la base
    include("bdd_connect.php");


    // on écrit la requête sql
    // $sql = "INSERT INTO users(id, NOM, PRENOM,MAIL) VALUES('','$nom','$prenom','$email')";
    // $sql = $bdd->prepare("INSERT INTO users(USER_ID, NOM, PRENOM,MAIL) VALUES('','$nom','$prenom','$email')")
    //  or exit(print_r($bdd->errorInfo()));

    $sql = $bdd->prepare("INSERT INTO users(USER_ID,USER_STATUS, NOM, PRENOM,MAIL, PHONE,PASSWORD,REGION) VALUES('','1',:nom,:prenom,:email,:phone,:password,:lieu)");
    $sql->bindParam(':nom', $nom);
    $sql->bindParam(':prenom', $prenom);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':password', md5($password));
    $sql->bindParam(':phone', $phone);
    $sql->bindParam(':lieu', $lieu);
    // on insère les informations du formulaire dans la table
    //  mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $phone=$_POST['phone'];
    $lieu=$_POST['lieu'];
    $sql->execute();
    // on affiche le résultat pour le visiteur


    $destinataire = 'jjonathan94170@gmail.com';
    echo "Ce script envoie un mail à $destinataire";
    mail($destinataire, 'test email 1', 'merci pour ton tutoriel');




    echo'

<div>
   <p>
      <h1>Redirection automatique</h1>
   </p>
</div>
';


    mysql_close();  // on ferme la connexion
}
?>
