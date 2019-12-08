<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'un paiement</title>
  </head>
  <body>

    <?php if (isset( $_GET['idAdherent'])){
      $id = $_GET['idAdherent'];
      $adh = $adherents->getUnAdherent($id); ?>

      <h1>Ajout d'un paiement pour <?php echo $adh->getPrenom()." ".$adh->getNom();?> </h1>
    <?php }else{ ?>
      <h1>Ajout d'un paiement</h1>
    <?php } ?>

    <form class="" action="../../controler/tablepaiement/insertPaiement.ctrl.php<?php if (isset( $_GET['idAdherent'])){ echo "?idAdherent=".$id;}?>" method="post">


      <?php if (!isset( $_GET['idAdherent'])){ ?>
        <select name="idAdherent">
          <?php foreach ($lesadh as $unadh) { ?>
            <option value ="<?php echo $unadh->getIdAdherent();?>"><?php echo $unadh->getPrenom()." ".$unadh->getNom();?></option>
          <?php } ?>
        </select>
      <?php } ?>


      <fieldset>
        <legend>Informations du paiement</legend>
        <label for="datePaiement">Date du paiement :</label><br/>
        <input type="date" name="datePaiement" value="" /><br/>

        <label for="prix">Prix :</label><br/>
        <input type="text" name="prix" value="" /><br/>

        <label for="description">Description :</label><br/>
        <input type="text" name="description" value="" /><br/>

        <label for="etatDuPaiement">Etat du paiement :</label><br/>
        <input type="text" name="etatDuPaiement" value="" /><br/>

<!--
        <label for="type">Type (Licence,adhésion,Article) :</label><br/>
        <SELECT name="type" size="1">
          <option value = 'Licence'>Licence</option>
          <option value = 'Adhésion'>Adhésion</option>
          <option value = 'Article'>Article</option>
        </SELECT> -->
      </fieldset>

      <div id="formcache" hidden>
        <fieldset>
        <legend>Informations article</legend>
        <label for='nomArticle'>Liste des articles disponibles :</label>
        <SELECT name="nomArticle" size="1">
        <?php foreach ($lesArticles as  $unArticle) { ?>
          <option value ="<?php $unArticle->getDescription()?>"><?php echo $unArticle->getDescription()?></option>
          <?php } ?>
          </SELECT>
          <label for="">Quantité commandée :</label>
          <input type="text" name="quantiteCommande" value="" />
          </fieldset>
      </div>

      <label for="type">Type (Licence,adhésion,Article) :</label><br/>
      <SELECT name="type" size="1" onclick="document.getElementById('formcache').style.display = (this.checked? 'block':'none');">
        <option value = 'Licence'>Licence</option>
        <option value = 'Adhésion' selected>Adhésion</option>
        <option value = 'Article' onclick="document.getElementById('formcache').style.display = (this.checked? 'block':'none');" >Article</option>
      </SELECT>
      
      <input type="checkbox" onclick="document.getElementById('formcache').style.display = (this.checked? 'block':'none');" value="Article" />
      Cliquez sur la case pour afficher les informations concernant un article <br/>

      <input type="submit" value="Ajouter" />
      <input type="reset" value="Annuler" />
      Retour : <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
