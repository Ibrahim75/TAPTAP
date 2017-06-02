<?php
session_name('SESSION');
session_start();
?>
<ion-view title="Notification" id="page35">
    <ion-content padding="true" class="has-header">
        <div class="spacer" style="width: 300px; height: 19px;"></div>
        <div>
            <img src="img/CVFRIXRMM8KDFwadDTQA_logo2.png" style="display: block; width: 100%; height: auto; margin-left: auto; margin-right: auto;">
        </div>
        <?php
        if (isset($_GET['msg1_connexion']))
        {
            echo $_GET['msg1_connexion'];
            set_time_limit(5);
        }
        ?>

            <div class="spacer" style="width: 300px; height: 26px;"></div>
            <ion-list id="inscrivezVous-list26">
                <strong> <?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?></strong>
<?php include("bdd_connect.php");
$aa = $_SESSION['USER_ID'];
$bb = $_SESSION['USER_ID'];
$test = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.ELEVE_NAME=$aa and b.STATUS_ID=1 and b.ELEVE_NAME=$aa");

$donnees = $test->fetchAll(PDO::FETCH_ASSOC);
$result= $test->rowcount();


$test2 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=1 and b.USER_ID_PROF=$aa");

$donnees2 = $test2->fetchAll(PDO::FETCH_ASSOC);
$result2= $test2->rowcount();


$test3 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=2 and b.USER_ID_PROF=$aa");

$donnees3 = $test3->fetchAll(PDO::FETCH_ASSOC);
$result3= $test3->rowcount();



$test4 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=4 and (b.USER_ID_PROF=$aa or b.ELEVE_NAME=$aa)");

$donnees4 = $test4->fetchAll(PDO::FETCH_ASSOC);
$result4= $test4->rowcount();

$test5 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=2 and b.ELEVE_NAME=$aa");

$donnees5 = $test5->fetchAll(PDO::FETCH_ASSOC);
$result5= $test5->rowcount();



$test6 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=3 and b.ELEVE_NAME=$aa");

$donnees6 = $test6->fetchAll(PDO::FETCH_ASSOC);
$result6= $test6->rowcount();



$test7 = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.ELEVE_NAME  WHERE b.STATUS_ID=3 and b.USER_ID_PROF=$aa");

$donnees7 = $test7->fetchAll(PDO::FETCH_ASSOC);
$result7= $test7->rowcount();
?>


<label class="item item-input" id="inscrivezVous-input6">
</label>
                <label class="item item-energized item-input" id="inscrivezVous-input7">
                    <span class="input-label">Cours que vous recevez en attente :</span>

                </label>
                <?php
                foreach($donnees as $donnees){
                    ?>

                    <?php echo $donnees['PROF']; ?> cours de <?php echo $donnees['MATIERE_PRIX'];?>€ le <?php echo $donnees['START_DATE'];  ?><br><br>

                    <?php

                }
                ?>
                <label class="item item-energized item-input" id="inscrivezVous-input7">
                    <span class="input-label">Cours que vous donnez à valider(si vous êtes prof) :</span>

                </label>
                <?php
                foreach($donnees2 as $donnees2){
                    ?>

                    <?php echo $donnees2['ELEVE']; ?> cours de <?php echo $donnees2['MATIERE_PRIX']; ?>€ le <?php echo $donnees2['START_DATE'];?>

                    <?php

                    echo'<form method="post" action="validation.php" >
                    <input type="hidden" name="user_id" value='; echo $donnees2['CD_ID']; echo'>
                    <button class="button button-small button-balanced button-outline" name="Submit">Valider</button>
                    <button class="button button-small button-assertive button-outline" name="Annuler">Annuler</button>
                    <!--<input type="submit" name="Submit" value="Valider"><input type="submit" name="Annuler" value="Annuler">-->
                </form><br>';
                }
                ?>
                <label class="item item-balanced item-input" id="inscrivezVous-input9">
                    <span class="input-label">Cours confirmé en tant que prof :</span>

                </label>
                <?php
                foreach($donnees3 as $donnees3){
                    ?>

                    <?php echo $donnees3['ELEVE']; ?> cours de <?php echo $donnees3['MATIERE_PRIX']; ?> € confirmé le <?php echo $donnees3['START_DATE'];?><br><br>

                    <?php

                }
                ?>
                </label>
                <label class="item item-balanced item-input" id="inscrivezVous-input9">
                    <span class="input-label">Cours confirmé en tant qu'élève :</span>

                </label>
                <?php
                foreach($donnees5 as $donnees5){
                    ?>

                    <?php echo $donnees5['PROF']; ?> cours de <?php echo $donnees5['MATIERE_PRIX']; ?> € confirmé € le <?php echo $donnees5['START_DATE'];?>
                    
                    <?php

                    echo'<form method="post" action="commentaire.php" >
                    <label class="item item-input" id="inscrivezVous-input10">
                        <span class="input-label">Avis sur le prof :</span>
                        <input type="text" name="comm" placeholder="">
                    </label>
                    <input type="hidden" name="user_id" value='; echo $donnees5['CD_ID']; echo'>
                    <button class="button button-small button-balanced button-outline" name="commenter">Envoyer</button>
                    <!--<input type="submit" name="Submit" value="Valider"><input type="submit" name="Annuler" value="Annuler">-->
                </form><br>';?>

                    <br><br>

                    <?php

                }
                ?>
                </label>
                <label class="item item-calm item-input" id="inscrivezVous-input7">
                    <span class="input-label">Cours dispensé en tant que prof :</span>

                </label>
                <?php
                foreach($donnees7 as $donnees7){
                    ?>

                    <?php echo $donnees7['ELEVE']; ?> cours de <?php echo $donnees4['MATIERE_PRIX']; ?> € annulé pour le  <?php echo $donnees7['START_DATE'];?><br><br>

                    <?php

                }
                ?>
                </label>
                <label class="item item-calm item-input" id="inscrivezVous-input7">
                    <span class="input-label">Cours dispensé en tant qu'élève :</span>

                </label>
                <?php
                foreach($donnees6 as $donnees6){
                    ?>

                    <?php echo $donnees6['PROF']; ?> cours de <?php echo $donnees4['MATIERE_PRIX']; ?> € annulé pour le  <?php echo $donnees6['START_DATE'];?><br><br>

                    <?php

                }
                ?>
                <label class="item item-assertive item-input" id="inscrivezVous-input8">
                    <span class="input-label">Cours annulé :</span>

                </label>
                <?php
                foreach($donnees4 as $donnees4){
                    ?>

                    <?php echo $donnees4['PROF']; ?> cours de <?php echo $donnees4['MATIERE_PRIX']; ?> € annulé pour le  <?php echo $donnees4['START_DATE'];?><br><br>

                    <?php

                }
                ?>



                <a ui-sref="accueil" id="choix-button7" class="button button-balanced button-large button-block">Retour</a>
            </ion-list>
            <div class="spacer" style="width: 300px; height: 26px;"></div>

    </ion-content>
</ion-view>