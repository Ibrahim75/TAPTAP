<?php
session_name('SESSION');
session_start();
//Connection au serveur de base de donnée
include("bdd_connect.php");
header ("Refresh: 0;URL=../www/#");
//if(isset($_SESSION['id'])) {
if(isset($_POST['vali']))
{

    $titre_profil=$_POST['titre_profil'];
    $description_profil=$_POST['description_profil'];
    $formation_profil=$_POST['formation_profil'];
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $mail=$_POST['mail'];
    $password=md5($_POST['password']);
    $mata=$_POST['mata'];
    $prix=$_POST['prix'];
    $supp=$_POST['supp'];
    $id = $_SESSION['USER_ID'];

    //Mise à jour des informations

    $req = $bdd->prepare("UPDATE users SET PRENOM= :prenom, NOM= :nom, MAIL= :mail,PASSWORD =:password, TITRE= :titre_profil, DESCRIPTION= :description_profil, EXPERIENCE= :formation_profil WHERE USER_ID= '".$_SESSION['USER_ID']."'");
    $req->execute(array(
        'titre_profil' =>$titre_profil,
        'description_profil' =>$description_profil,
        'formation_profil' =>$formation_profil,
        'prenom' =>$prenom,
        'nom' =>$nom,
        'mail' =>$mail,
        'password' =>$password
    ));

    $req2 = $bdd->prepare("INSERT INTO users_matiere (USER_ID,MATIERE_ID,PRIX) VALUE (:id,:mata,:prix) ");
    $req2->execute(array(
        'mata' =>$mata,
        'prix' =>$prix,
        'id' =>$id
    ));


    $req3 = $bdd->prepare("DELETE from users_matiere where USER_ID=:id and MATIERE_ID=:supp   ");
    $req3->execute(array(
        'supp' =>$supp,
        'id' =>$id
    ));




    // $userinfo1 = $bdd->query("SELECT * FROM users WHERE id= '".$_SESSION['USER_ID']."'");
    // $resultat = $userinfo1->fetch();

    // $_SESSION['TITRE'] = $userinfo['titre_profil'];
    // $_SESSION['DESCRIPTION'] = $userinfo['description_profil'];
    // $_SESSION['EXPERIENCE'] = $userinfo['formation_profil'];

    echo "modifications terminées";

}

else{
    echo "Veuillez remplir tous les champs.";
}


?>
<?php
if(isset($erreur)) {
    echo 'Erreur : '. $erreur;
}
?>