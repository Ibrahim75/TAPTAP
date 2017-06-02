<?php
session_name('SESSION1');
session_start();?>
<ion-view title="demander" id="page9">
  <ion-content padding="true" class="has-header">
    <form method="POST" action="info_cours.php" class="list">
    <div>
      <img src="img/aXurXCSsRXelDFUhMne9_images.jpeg" style="display: block; width: 30%; height: auto; margin-left: auto; margin-right: auto;">
    </div>
    <div id="demander-markdown15" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">
        <strong><?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?> <?php echo $_SESSION['USER_ID']; ?></strong>
      </p>
    </div>
    <div id="demander-markdown16" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;"><?php echo $_SESSION['TITRE'];?></p>
    </div>
    
    <div id="demander-markdown12" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">Proposer un crénau à <?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?>.</p>
    </div>
    <ion-list id="demander-list12"><?php include("bdd_connect.php");
      $aa = $_SESSION['USER_ID'];
      $test = $bdd->query("SELECT * FROM users a inner join users_matiere b on a.USER_ID = b.USER_ID inner join matiere c on b.MATIERE_ID = c.MATIERE_ID WHERE a.USER_ID=$aa");


      $donnees = $test->fetchAll(PDO::FETCH_ASSOC);
      $result= $test->rowcount();






      ?>
      <?php
      foreach($donnees as $donnees){
        ?>
        <ion-radio name="mat" value="<?php echo $donnees['NAME'];echo'  à  ';echo $donnees['PRIX']; ?>"><?php echo $donnees['NAME']; ?> <?php echo $donnees['PRIX']; ?>€</ion-radio>




        <?php
      }
      ?>


    <h4>Date</h4>  <input name="date" type="date"><br>
      <label class="item item-select" id="rechercherVotreCours-select2" >
        <span class="input-label">Nombre d'heure* :</span>
        <select name="nbrheur" name="matieres">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
      </label>

    <input value="<?php echo $_SESSION['NOM']; ?>" type="hidden" name="nom" placeholder="Rechercher par nom" >
    <input value="<?php echo $_SESSION['PRENOM']; ?>" type="hidden" name="prenom" placeholder="Rechercher par nom" >
    <input value="<?php echo $_SESSION['NAME']; ?>" type="hidden" name="matier" placeholder="Rechercher par nom" >
    <input value="<?php echo $_SESSION['PRIX']; ?>" type="hidden" name="prix" placeholder="Rechercher par nom" >
    <input value="<?php echo $_SESSION['USER_ID']; ?>" type="hidden" name="id" placeholder="Rechercher par nom" >

<!--    <a ui-sref="confirmation" id="demander-button14" class="button button-positive  button-block" name="ddd">Envoyer la demande !</a>-->
      <input id="connexion-button3" class="button button-balanced  button-block" type="submit" name="ddd" value="Envoyer la demande !">
      <!--      <input type="submit" value="Envoyer" name="ddd">-->
    </form>
  </ion-content>
</ion-view>