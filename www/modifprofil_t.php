<?php 
session_start();
//Connection au serveur de base de donnée
include("bdd_connect.php");

//if(isset($_SESSION['id'])) {
	if(
		 isset($_POST['titre_profil']) AND !empty($_POST['titre_profil'])
		AND isset($_POST['description_profil']) AND !empty($_POST['description_profil'])
		AND isset($_POST['formation_profil']) AND !empty($_POST['formation_profil'])
		)
	{
		
		$titre_profil=$_POST['titre_profil'];
		$description_profil=$_POST['description_profil'];
		$formation_profil=$_POST['formation_profil'];

		//Mise à jour des informations 

						$req = $bdd->prepare("UPDATE users SET TITRE= :titre_profil, DESCRIPTION= :description_profil, EXPERIENCE= :formation_profil WHERE USER_ID= '".$_SESSION['USER_ID']."'");
						$req->execute(array(
							'titre_profil' =>$titre_profil,
							'description_profil' =>$description_profil,
							'formation_profil' =>$formation_profil
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