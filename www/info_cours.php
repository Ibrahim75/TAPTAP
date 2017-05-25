<?php
session_name('SESSION');
session_start();
include("bdd_connect.php");
if(isset($_POST['ddd']))
{

    $adresse_mailconnect= $_POST['nom'];
    $mot_de_passeconnect = $_POST['prenom'];
    $mat = $_POST['mat'];
    $prix = $_POST['prix'];
    $id = $_POST['id'];
    $date = $_POST['date'];
    $nbrheur = $_POST['nbrheur'];
?>
<ion-view title="Confirmation" id="page11">
  <ion-content padding="true" class="has-header">
      <form method="POST" action="confirm.php" class="list">
    <div>
      <img src="img/aXurXCSsRXelDFUhMne9_images.jpeg" style="display: block; width: 30%; height: auto; margin-left: auto; margin-right: auto;">
    </div>
    <div id="confirmation-markdown23" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">
        <strong><?php echo $_SESSION['PRENOM'];?> <?php echo $_SESSION['NOM'];?></strong> vous avez reservez un cours de  <strong><?php  echo $mot_de_passeconnect; echo'  '; echo $adresse_mailconnect;?></strong>
      </p>
    </div>
    <div id="confirmation-markdown24" style="text-align:center;" class="show-list-numbers-and-dots">
      <p style="color:#000000;">Le cour demandé sont : <?php echo $mat; ?> € le <?php echo $date; ?>  pour <?php echo $nbrheur; ?> heure(s) </p>
    </div>
          <input value="<?php echo $_SESSION['NOM']; ?>" type="hidden" name="nom" placeholder="Rechercher par nom" >
          <input value="<?php echo $_SESSION['PRENOM']; ?>" type="hidden" name="prenom" placeholder="Rechercher par nom" >
          <input value="<?php echo $_SESSION['NAME']; ?>" type="hidden" name="matier" placeholder="Rechercher par nom" >
          <input value="<?php echo $_SESSION['PRIX']; ?>" type="hidden" name="prix" placeholder="Rechercher par nom" >



          <input value="<?php echo $adresse_mailconnect; ?>" type="hidden" name="nom_prof" placeholder="Rechercher par nom" >
          <input value="<?php echo $mot_de_passeconnect; ?>" type="hidden" name="prenom_prof" placeholder="Rechercher par nom" >
          <input value="<?php echo $mat; ?>" type="hidden" name="mat" placeholder="Rechercher par nom" >
          <input value="<?php echo $prix; ?>" type="hidden" name="prix2" placeholder="Rechercher par nom" >
          <input value="<?php echo $id; ?>" type="hidden" name="id" placeholder="Rechercher par nom" >
          <input value="<?php echo $date; ?>" type="hidden" name="date" placeholder="Rechercher par nom" >
          <input value="<?php echo $nbrheur; ?>" type="hidden" name="nbrheur" placeholder="Rechercher par nom" >

      <input type="submit" value="Confirmer" name="Confirmer">
      </form>
  </ion-content>
</ion-view>

<?php }?>