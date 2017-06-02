<?php
session_name('SESSION');
session_start();?>
<ion-view title="profil" id="page40">
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
                <label class="item item-input" id="inscrivezVous-input7">
                    <span class="input-label">Prénom :</span>
                    <input type="text" name="prenom" value="<?php echo $_SESSION['PRENOM'];?>">
                </label>
                <label class="item item-input" id="inscrivezVous-input7">
                    <span class="input-label">Nom :</span>
                    <input type="text" name="nom" value="<?php echo $_SESSION['NOM'];?>">
                </label>
                <label class="item item-input" id="inscrivezVous-input7">
                    <span class="input-label">Mail :</span>
                    <input type="text" name="mail" value="<?php echo $_SESSION['adresse_mail'];?>">
                </label>
                <label class="item item-input" id="inscrivezVous-input9">
                    <span class="input-label">Password :</span>
                    <input type="text" name="password" value="<?php echo $_SESSION['mdp'];?>">
                </label>
                <h4 id="profil-heading1" style="color:#000000;">Titre du profil</h4>
                <label class="item item-input" id="inscrivezVous-input6">
                    <span class="input-label"></span>
                    <input type="text" name="titre_profil" value="<?php echo $_SESSION['TITRE'];?>">
                </label>

                <h4 id="profil-heading1" style="color:#000000;">Ma description</h4>
                <label class="item item-input" id="inscrivezVous-input6">
                    <span class="input-label"></span>
                    <input type="text" name="description_profil" value="<?php echo $_SESSION['DESCRIPTION'];?>">
                </label>

                <h4 id="profil-heading2" style="color:#000000;">Formation</h4>
                <label class="item item-input" id="inscrivezVous-input6">
                    <span class="input-label"></span>
                    <input type="text" name="formation_profil" value="<?php echo $_SESSION['EXPERIENCE'];?>">
                </label>

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




                    <h4 id="profil-heading10" style="color:#000000;">Choisissez le cours que vous voulez enseigner : </h4>
                    <ion-list id="profil-list22">
                        <?php include("bdd_connect.php");

                        $t = $bdd->query("SELECT * FROM matiere ");


                        $d = $t->fetchAll(PDO::FETCH_ASSOC);





                        ?>
                        <?php
                        foreach($d as $d){
                            ?>


                                <ion-radio name="mata" value="<?php echo $d['MATIERE_ID']; ?>"><?php echo $d['NAME']; ?> </ion-radio>


                            <?php
                        }
                        ?>

                        <h4 id="profil-heading2" style="color:#000000;">Prix du cours</h4>
                        <label class="item item-input" id="inscrivezVous-input6">
                            <span class="input-label"></span>
                            <input type="text" name="prix" value=""> <i class="icon ion-social-euro"></i>
                        </label>


                        <h4 id="profil-heading10" style="color:#000000;">Choisissez le cours que vous voulez suprimmer : </h4>
                        <ion-list id="profil-list22">
                            <?php include("bdd_connect.php");

                            $ta = $bdd->query("SELECT * FROM users a inner join users_matiere b on a.USER_ID = b.USER_ID inner join matiere c on b.MATIERE_ID = c.MATIERE_ID WHERE a.USER_ID=$aa");


                            $da = $ta->fetchAll(PDO::FETCH_ASSOC);





                            ?>
                            <?php
                            foreach($da as $da){
                                ?>


                                <ion-radio name="supp" value="<?php echo $da['MATIERE_ID'];?>"><?php echo $da['NAME']; ?> <?php echo $da['PRIX']; ?>€</ion-radio>



                                <?php
                            }
                            ?>

                    <ion-list id="profil-list9">
                        <input id="connexion-button3" class="button button-balanced  button-block" type="submit" name="vali" value="Valider modification">
                       </form>
        <div id="choix-markdown17" class="show-list-numbers-and-dots">
            <p style="color:#000000;">En modifiant les information, vous serez automatiquement déconnecté afin que les modifications soient prit en compte</p>
        </div>

                    </ion-list>
    </ion-content>
</ion-view>