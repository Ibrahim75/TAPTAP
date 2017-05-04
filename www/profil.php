 <?php session_start();?>
<ion-view title="profil" id="page1">
  <ion-content padding="true" class="has-header">
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

    <div id="profil-markdown13" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">
        <strong> <?php echo $_SESSION['NOM']; ?>  <?php echo $_SESSION['PRENOM']; ?></strong>
      </p>
    </div>
    <div id="profil-markdown14" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;"> <?php echo $_SESSION['TITRE'];?> </p>
    </div>
    <div id="profil-markdown9" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">
        <strong>50€/h</strong>
      </p>
    </div>
    <h4 id="profil-heading1" style="color:#000000;">Ma description</h4>
    <div id="profil-markdown4" class="show-list-numbers-and-dots">
      <p style="color:#000000;"><?php echo $_SESSION['DESCRIPTION'];?></p>

      <p style="color:#000000;">Lorem ipsum dolor sit amet, sapien etiam, nunc amet dolor ac odio mauris justo. Luctus arcu, urna praesent at id quisque ac. Arcu es massa vestibulum malesuada, integer vivamus elit eu mauris eus, cum </p>
    </div>
    <h4 id="profil-heading2" style="color:#000000;">Formation</h4>
    <div id="profil-markdown5" class="show-list-numbers-and-dots">
      <p style="color:#000000;"> <?php echo $_SESSION['EXPERIENCE'];?> </p>
    </div>
    <h4 id="profil-heading10" style="color:#000000;">Cours proposé : </h4>
    <ion-list id="profil-list22">
      <ion-item class="item-icon-right" id="profil-list-item33">Mathématiques :
        <i class="icon ion-social-euro"></i>
      </ion-item>
      <ion-item class="item-icon-right" id="profil-list-item34">Physique :
        <i class="icon ion-social-euro"></i>
      </ion-item>
    </ion-list>
    <a ui-sref="demander" id="profil-button2" class="button button-positive  button-block">Demander un cours</a>
    <ion-list id="profil-list9">
      <ion-item class="item-avatar" id="profil-list-item2">
        <img src="img/5bqzEmx2Q8iyvY1Wo0pi_IMG_1747.PNG">
        <h2>Jonathant Joseph</h2>
        <p>Excellent prof! J'ai beaucoup aimé ça façon d'enseigner! </p>
      </ion-item>
      <ion-item class="item-avatar" id="profil-list-item5">
        <img src="img/5bqzEmx2Q8iyvY1Wo0pi_IMG_1747.PNG">
        <h2>Jonathant Joseph</h2>
        <p>Excellent prof! J'ai beaucoup aimé ça façon d'enseigner! </p>
      </ion-item>
      <ion-item class="item-avatar" id="profil-list-item6">
        <img src="img/5bqzEmx2Q8iyvY1Wo0pi_IMG_1747.PNG">
        <h2>Jonathant Joseph</h2>
        <p>Excellent prof! J'ai beaucoup aimé ça façon d'enseigner! </p>
      </ion-item>
    </ion-list>
  </ion-content>
</ion-view>