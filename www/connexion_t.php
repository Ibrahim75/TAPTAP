<?php
session_start();
include("bdd_connect.php");

if(isset($_POST['formconnexion']))
{
	$adresse_mailconnect= $_POST['mail'];
	$mot_de_passeconnect = $_POST['mdp'];

	if(!empty($adresse_mailconnect) AND !empty($mot_de_passeconnect))
	{

		$requser = $bdd->prepare("SELECT * FROM users WHERE MAIL=? AND PASSWORD=?");
		$requser->execute(array($adresse_mailconnect, $mot_de_passeconnect));
		$userexist = $requser->rowCount();
		if($userexist == 1)
		{
			$userinfo = $requser->fetch();
			$_SESSION['USER_ID'] = $userinfo['USER_ID'];
			$_SESSION['NOM'] = $userinfo['NOM'];
			$_SESSION['PRENOM'] = $userinfo['PRENOM'];
			$_SESSION['adresse_mail'] = $_POST['mail'];
			$_SESSION['mdp'] = $_POST['mdp'];
			$_SESSION['PHOTO'] = $userinfo['PHOTO'];
			$_SESSION['TITRE'] = $userinfo['TITRE'];
			$_SESSION['DESCRIPTION'] = $userinfo['DESCRIPTION'];
			$_SESSION['EXPERIENCE'] = $userinfo['EXPERIENCE'];

			// header('Location: Accueil.php');
			//header("Location : profil.php?id=" . $_SESSION['id']);
			
			// echo "bonjour : " . $userinfo['NOM'] . $userinfo['id'] ;
			// echo "vous êtes connecté";
			header('Location: profil.php?msg_connexion=Mot de passe incorrecte');
		}
		else{

			// echo "mdp incorrecte";
			header('Location: connexion.php?msg_connexion=Mot de passe incorrecte');
		}

	}
	else{
			header('Location: connexion.php?msg_connexion=Veuillez remplir tous les champs');
		// echo "veuillez remplir tous les champs";

	}
}
if(isset($erreur)) {
	echo 'Erreur : '. $erreur;
}
?>
