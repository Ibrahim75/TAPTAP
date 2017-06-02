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

        <form action="modifprofil.php" method="post">

            <div id="profil-markdown13" style="text-align:center;" class="show-list-numbers-and-dots">
                <p style="color:#000000;">
                    <strong> <?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?></strong>
                </p>
            </div>
            <div id="profil-markdown14" style="text-align:center;" class="show-list-numbers-and-dots">
                <h4 id="profil-heading1" style="color:#000000;">Titre du profil</h4>
                <div id="profil-markdown4" class="show-list-numbers-and-dots">
                    <p style="color:#000000;"><?php echo $_SESSION['TITRE'];?></p>
                </div>

                <h4 id="profil-heading1" style="color:#000000;">Ma description</h4>
                <div id="profil-markdown4" class="show-list-numbers-and-dots">
                    <p style="color:#000000;"><?php echo $_SESSION['DESCRIPTION'];?></p>
                </div>
                <h4 id="profil-heading2" style="color:#000000;">Formation</h4>
                <div id="profil-markdown5" class="show-list-numbers-and-dots">
                    <p style="color:#000000;"> <?php echo $_SESSION['EXPERIENCE'];?> </p>
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


                    <a ui-sref="modifp" id="profil-button2" class="button button-positive  button-block">modifier Profil</a>
                    <div id="choix-markdown17" class="show-list-numbers-and-dots">
                        <p style="color:#000000;">En modifiant votre profil, vous ne pourrez qu'ajouter qu'un seul cours.</p>
                    </div>
                    <ion-list id="profil-list9">

                        <?php
                        foreach($donne as $donne){
                            ?>
                            <ion-item class="item-avatar" id="profil-list-item2">
                                <img src="img/5bqzEmx2Q8iyvY1Wo0pi_IMG_1747.PNG">
                                <h2><?php echo $donne['ELEVE']; ?></h2>
                                <p><?php echo $donne['NOTE']; ?></p>
                            </ion-item>


                            <?php
                        }
                        ?>


                    </ion-list>
    </ion-content>
</ion-view>