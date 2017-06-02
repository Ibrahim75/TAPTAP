<?php session_start();?>
<ion-view title="profil" id="page1">
    <ion-content padding="true" class="has-header">
        <div>
            <img src="img/aXurXCSsRXelDFUhMne9_images.jpeg" style="display: block; width: 30%; height: auto; margin-left: auto; margin-right: auto;">
        </div>
        <?php
        if (isset($_GET['msg1_connexion']))
        {
            echo $_GET['msg1_connexion'];
            set_time_limit(5);
        }
        ?>

        <div>
            <!-- <img src="<?php echo $_SESSION['PHOTO']?>" style="display: block; width: 50%; height: auto; margin-left: auto; margin-right: auto;"> -->
        </div>

        <form action="modifprofil_t.php" method="post">

            <div id="profil-markdown13" style="text-align:center;" class="show-list-numbers-and-dots">
                <p style="color:#000000;">
                    <strong> <?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?></strong>
                </p>
            </div>

            <div id="profil-markdown14" style="text-align:center;" class="show-list-numbers-and-dots">



                <div id="profil-markdown14" style="text-align:center;" class="show-list-numbers-and-dots">
                    <label>Titre du profil : </label>
                    <input type="text" style= "width:100%"" name= "titre_profil" value="<?php echo $_SESSION['TITRE']?>" >
                </div></br>

                <div id="profil-markdown9" style="text-align:center;" class="show-list-numbers-and-dots">
                    <label>Prix du cours : </label>
                    <input type="text" style= "width:100%"" name= "prix_matière" value= "à corriger" >
                </div></br>

                <div id="profil-markdown9" style="text-align:center;" class="show-list-numbers-and-dots">
                    <label>Ma description : </label>
                    <input type="text" style= "width:100%; height:70px" name= "description_profil" value= "<?php echo $_SESSION['DESCRIPTION'];?>">
                </div></br>

                <div id="profil-markdown9" style="text-align:center;" class="show-list-numbers-and-dots">
                    <label>Ma formation : </label>
                    <input type="text" style= "width:100%; height:70px" name= "formation_profil" value= "<?php echo $_SESSION['EXPERIENCE'];?>">
                </div></br>


</div>
                <h4 id="profil-heading10" style="color:#000000;">Cours proposé : </h4>
                <ion-list id="profil-list22">
                    <?php include("bdd_connect.php");
                    $aa = $_SESSION['USER_ID'];
                    $test = $bdd->query("SELECT * FROM users a inner join users_matiere b on a.USER_ID = b.USER_ID inner join matiere c on b.MATIERE_ID = c.MATIERE_ID WHERE a.USER_ID=$aa");
                    $comm = $bdd->query("SELECT * FROM users a inner join cours_dispense b on a.USER_ID = b.USER_ID_PROF  WHERE a.USER_ID=$aa");
                    // $test2 = $bdd->query("SELECT COUNT(*) as aaa FROM users a inner join users_matiere b on a.USER_ID = b.USER_ID inner join matiere c on b.MATIERE_ID = c.MATIERE_ID WHERE a.USER_ID=$aa");
                    // $donnees = $test->fetch();
                    // echo $donnees['NAME'] . '<br />';
                    // $test->execute();
                    // $result = $test->fetchColumn();
                    //  print("nom=$result\n");
                    //$result = $test->fetchAll();
                    //print_r($result);



                    // $test->setFetchMode(PDO::FETCH_ASSOC);
                    //$test2->setFetchMode(PDO::FETCH_ASSOC);


                    //foreach($test as $row)
                    // {
                    //  $zzz = $row['NAME'];
                    //  echo $zzz;
                    // }

                    $donnees = $test->fetchAll(PDO::FETCH_ASSOC);
                    $result= $test->rowcount();

                    $donne = $comm->fetchAll(PDO::FETCH_ASSOC);
                    $resulta= $comm->rowcount();




                    ?>
                    <?php
                    foreach($donnees as $donnees){
                        ?>

                        <ion-item class="item-icon-right" id="profil-list-item33"><?php echo $donnees['NAME']; ?> :
                            <i class="icon ion-social-euro"><?php echo $donnees['PRIX']; ?></i>
                        </ion-item>
                        <?php
                    }
                    ?>

                    <input name="enregistrer" class="bouton_enregistrer" type="submit" value="Enregistrer les modifications" >

        </form></br> </br>

        <a ui-sref="demander" id="profil-button2" class="button button-positive  button-block">Demander un cours</a>
        <ion-list id="profil-list9">

            <?php
            foreach($donne as $donne){
                ?>
                <ion-item class="item-avatar" id="profil-list-item2">
                    <img src="img/5bqzEmx2Q8iyvY1Wo0pi_IMG_1747.PNG">
                    <h2><?php echo $donne['ELEVE_NAME']; ?></h2>
                    <p><?php echo $donne['NOTE']; ?></p>
                </ion-item>


                <?php
            }
            ?>


        </ion-list>
    </ion-content>
</ion-view>