<?php session_start();?>
<ion-view title="Rechercher votre cours" id="page7">
  <ion-content padding="true" class="has-header">
    <?php
    if (isset($_GET['msg1_connexion']))
    {
      echo $_GET['msg1_connexion'];
      set_time_limit(5);
    }
    ?>
    <form method="POST" action="choixDuCours"class="list">
<!--      #/choixDuCours-->
      <h3 id="rechercherVotreCours-heading7" style="color:#000000;">Rechercher par nom</h3>
      <label class="item item-input" id="rechercherVotreCours-search1">
        <i class="icon ion-search placeholder-icon"></i>
        <input type="search" placeholder="Rechercher par nom">
      </label>
      <?php echo $_SESSION['PRENOM']; ?>
      <h3 id="rechercherVotreCours-heading6" style="color:#000000;">Rechercher par Lieu</h3>
      <label class="item item-select" id="rechercherVotreCours-select1" name="lieu">
        <span class="input-label">Régions :</span>
        <select>
          <option>Île-de-France</option>
          <option>Normandie</option>
          <option>Bretagne</option>
          <option>Occitanie</option>
        </select>
      </label>
      <label class="item item-select" id="rechercherVotreCours-select2" name="Départements">
        <span class="input-label">Départements :</span>
        <select>
          <option>Paris (75)</option>
          <option>Seine-Maritime (76)</option>
          <option>Seine-et-Marne (77)</option>
          <option>Yvelines (78)</option>
        </select>
      </label>

      <label class="item item-select" id="rechercherVotreCours-select2" name="matieres">
        <span class="input-label">Matiére :</span>
        <select>
          <option>Francais)</option>
          <option>Math</option>
          <option>Anglais</option>
          <option>Sport</option>
        </select>
      </label>
      <label class="item item-input" id="inscrivezVous-input10">
        <span class="input-label">Phone :</span>
        <input type="text" name="matiere" placeholder="">
      </label>

<!--      <input id="connexion-button3" class="button button-balanced  button-block" type="submit" name="formconnexion" value="Rechercher">-->
      <input type="submit" value="Envoyer" name="envoyer">
    </form>
    <div>
      <img src="img/TbGyOuqTrCdYbl7VmenJ_sampleMap.JPG" style="display: block; width: 100%; height: auto; margin-left: auto; margin-right: auto;">
    </div>
  </ion-content>
</ion-view>