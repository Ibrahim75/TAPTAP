<?php session_start();?>

<ion-view title="Choix du cours" id="page8">
  <ion-content padding="false" class=" manual-remove-top-padding has-header">
    <?php
   if (isset($_GET['msg1_connexion']))
    {
      echo $_GET['msg1_connexion'];
      set_time_limit(5);
    }
    ?>

    <ion-list id="choixDuCours-list14">
      <ion-item class="item-icon-left dark" id="choixDuCours-list-item18">
        <i class="icon ion-android-arrow-back"></i>Retour</ion-item><br>
      <?php include("bdd_connect.php");
      // On commence par récupérer les champs
      if(isset($_POST['matieres']))      $nom=$_POST['matieres'];
      else      $nom="";
      if(isset($_POST['lieu']))      $lieu=$_POST['lieu'];
      else      $lieu="";


      if(empty($nom))
      {
        echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>'.$nom;
      }

// Aucun champ n'est vide, on peut enregistrer dans la table
      else {


        $test = $bdd->query("SELECT DISTINCT a.PRENOM,a.NOM,a.USER_ID FROM users a inner join users_matiere b on a.USER_ID = b.USER_ID inner join matiere c on b.MATIERE_ID = c.MATIERE_ID WHERE c.NAME like'%$nom%' AND A.REGION like '%$lieu%'");
        //$test->bindParam(':nom', $nom);
        $nom=$_POST['matiere'];
        $test->setFetchMode(PDO::FETCH_ASSOC);

        /*foreach ($test as $row) {
          echo'<h1>'; echo $row['PRENOM'];echo '  '; echo $row['NOM'], '<br/>'; echo'ID :';echo $row['USER_ID']; echo'</h1>';
        }*/

        foreach ($test as $row) {
          echo $row['PRENOM'];echo '  '; echo $row['NOM'], '<br/>'; echo'ID :';echo $row['USER_ID'];
          echo'<form method="post" action="connexion_t2.php" >
                    <input type="hidden" name="user_id" value='; echo $row['USER_ID']; echo' >
                    <input type="submit" name="Submit" value="Envoyer">
                </form>';
        }
      //  header('Location: ../www/#/choixDuCours');
      }
      ?>



      <!--<ion-item class="item-thumbnail-left dark" id="choixDuCours-list-item17">
     <img src="img/JBcdiWvQOaIZeCgUFsMH_jospeh.png">
        <h2dark>Jonathan Joseph
          <p style="white-space:normal;">50€/h - Professeur de mathématique à l'UPMC.</p>
        </h2dark>
      </ion-item>
      <ion-item class="item-thumbnail-left" id="choixDuCours-list-item19" href="mailto:">
        <img src="img/thZqhjWQienKm5zlfb90_IMG_0710.PNG">
        <h2>Marzouck Soumanou</h2>
        <p style="white-space:normal;">65€/h - Étudiant en école d'ingénieur à l'ISEP.</p>
      </ion-item>
      <ion-item class="item-thumbnail-left dark" id="choixDuCours-list-item7">
        <img src="img/OrqO4IUfTVWngATU1l9A_IMG_0756.PNG">
        <h2dark>Kevin Raharion
          <p style="white-space:normal;">50€/h - Professeur des écoles dans une école primaire.</p>
        </h2dark>
      </ion-item>-->
    </ion-list>
  </ion-content>
</ion-view>
