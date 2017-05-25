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
    <form method="POST" action="rechercherVotreCour.php"class="list">
<!--      #/choixDuCours-->
      <h3 id="rechercherVotreCours-heading7" style="color:#000000;">Rechercher par nom</h3>
      <label class="item item-input" id="rechercherVotreCours-search1">
        <i class="icon ion-search placeholder-icon"></i>
        <input type="search" name="search" placeholder="Rechercher par nom">
      </label>

      <h3 id="rechercherVotreCours-heading6" style="color:#000000;">Rechercher par Lieu</h3>
      <label class="item item-select" id="rechercherVotreCours-select1" >
        <span class="input-label">Régions :</span>
        <select name="lieu">
            <option value="">Choisir</option>
          <option value="Île-de-France">Île-de-France</option>
          <option value="Normandie">Normandie</option>
          <option value="Bretagne">Bretagne</option>
          <option value="Occitanie">Occitanie</option>
        </select>
      </label>
      <!--<label class="item item-select" id="rechercherVotreCours-select2" name="Départements">
        <span class="input-label">Départements :</span>
        <select>
          <option>Paris (75)</option>
          <option>Seine-Maritime (76)</option>
          <option>Seine-et-Marne (77)</option>
          <option>Yvelines (78)</option>
        </select>
      </label>-->

      <label class="item item-select" id="rechercherVotreCours-select2" >
        <span class="input-label">Matiére* :</span>
        <select name="matieres">
            <option value="">Choisir</option>
          <option value="Francais">Francais</option>
          <option value="Math">Math</option>
          <option value="Anglais">Anglais</option>
          <option value="Sport">Sport</option>
        </select>
      </label>


      <input id="connexion-button3" class="button button-balanced  button-block" type="submit" name="formconnexion" value="Rechercher">
<!--      <input type="submit" value="Envoyer" name="envoyer">-->
    </form>
    <div>
      <img src="img/TbGyOuqTrCdYbl7VmenJ_sampleMap.JPG" style="display: block; width: 100%; height: auto; margin-left: auto; margin-right: auto;">
    </div>
  </ion-content>
</ion-view>