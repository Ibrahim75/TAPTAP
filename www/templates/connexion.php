
<ion-view title="Connexion" id="page3">
  <ion-content padding="true" class="has-header">
    <div class="spacer" style="width: 300px; height: 39px;"></div>
    <div>
      <img src="img/VXTdFd0PSTiBvAXUWKxf_logo2.png" style="display: block; width: 100%; height: auto; margin-left: auto; margin-right: auto;">
    </div>
    <div class="spacer" style="width: 300px; height: 54px;"></div>
    <form action="connexion_t.php" id="connexion-form1" class="list" method="post">
      <ion-list id="connexion-list10">
        <label class="item item-input" id="connexion-input1">
          <span class="input-label">email :</span>
          <input type="text" placeholder="" name="mail">
        </label>
        <label class="item item-input" id="connexion-input2">
          <span class="input-label">Mot de passe :</span>
          <input type="password" placeholder="" name="mdp">
        </label>
      </ion-list>
      <?php
      //Connection au serveur de base de donnée
      include("bdd_connect.php");

      // $test = $bdd->query("SELECT MAIl FROM users WHERE USER_ID=3 ");
      // $donnees = $test->fetch();
      // echo $donnees['MAIl'] . '<br />';


      ?>
      
      <div class="spacer" style="width: 300px; height: 51px;"></div>
      <!-- <a ui-sref="profil" id="connexion-button3" class="button button-balanced  button-block">Connexion</a> -->

      <input id="connexion-button3" class="button button-balanced  button-block" type="submit" name="formconnexion" value="Connexion">
      <!-- <a id="connexion-button3" class="button button-balanced  button-block" name="formconnexion">Connexion</a> -->
      <a ui-sref="choix" id="connexion-button4" style="font-weight:500;font-size:-23px;" class="button button-positive  button-block button-clear">Ou inscrivez-vous!</a>

    </form>
    <?php
    
    if (isset($_GET['msg_connexion']))
    {
      echo $_GET['msg_connexion'];

      set_time_limit(5);
    }
    ?>
  </ion-content>
</ion-view>
