<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Modification d'un Paiement</title>
</head>
<body>

  <!-- Titre du formulaire paiement -->
  <?php if (isset( $_GET['idAdherent'])){
    $id = $_GET['idAdherent'];
    $adh = $adherents->getUnAdherent($id); ?>
    <h1>Modification du Paiement concernant <?php echo $adh->getPrenom()." ".$adh->getNom();?> </h1>
  <?php }else{ ?>
    <h1>Modification du Paiement</h1>
  <?php } ?>
  <!-------------------------------->


  <form class="" action="../../controler/tablepaiement/updatePaiementValide.ctrl.php?idPaiement=<?=$_GET['idPaiement']?>&idAdherent=<?=$_GET['idAdherent']?>" method="post">

    <fieldset>
      <legend>Type du paiement</legend>

      <!--Option à séléctionner en fonction du type deja choisi -->
      <label for="type">Sélectionnez un type (Licence,adhésion,Article) :</label><br/>
      <SELECT name="type" size="1" id="mySelect" >
        <?php if ($type == Licence){?>
          <option value = 'Licence' selected>Licence</option>
          <option value = 'Adhésion'>Adhésion</option>
          <option value = 'Article'>Article</option>
        <?php }else if ($type == Adhésion){?>
          <option value = 'Licence'>Licence</option>
          <option value = 'Adhésion' selected>Adhésion</option>
          <option value = 'Article'>Article</option>
        <?php }else{?>
          <option value = 'Licence'>Licence</option>
          <option value = 'Adhésion'>Adhésion</option>
          <option value = 'Article' selected>Article</option>
        <?php } ?>
      </SELECT>

        </fieldset>

    <!--Infos essentielles -->
      <div id="formbase" style="display:block;">

      <fieldset>

      <legend>Informations adhésion, licence</legend>

      <label for="datePaiement">Date du paiement :</label><br/>
      <input type="date" name="datePaiement" value="<?php echo $datePaiement ?>" /><br/>

      <label for="prix">Prix :</label><br/>
      <input type="text" name="prix" value="<?php echo $prix ?>" /><br/>

      <label for="description">Description :</label><br/>
      <input type="text" name="description" value="<?php echo $description ?>" /><br/>

      <label for="etatDuPaiement">Etat du paiement :</label><br/>
      <input type="text" name="etatDuPaiement" value="<?php echo $etatDuPaiement ?>" /><br/>



    </fieldset>

    <!--Infos supplémentaires si c'est un Article -->
    <div id="formcache" style="display:none;">
      <fieldset>
        <legend>Informations article</legend>

        <label for="datePaiement">Date du paiement :</label><br/>
        <input type="date" name="datePaiementArticle" value="<?php echo $datePaiement ?>" /><br/>

        <label for='nomArticle'>Liste des articles disponibles :</label><br/>
        <SELECT name="descriptionArticle" size="1">
          <?php foreach ($lesArticles as  $unArticle) { ?>
            <option value ="<?php echo $unArticle->getDescription()?>"><?php echo $unArticle->getDescription()?></option>
          <?php } ?>
        </SELECT><br/>

        <label for="">Quantité commandée :</label>
        <input type="text" name="quantiteCommande" value="<?php echo $quantiteCommande ?>" />

        <label for="etatDuPaiement">Etat du paiement :</label><br/>
        <input type="text" name="etatDuPaiementArticle" value="<?php echo $etatDuPaiement ?>" /><br/>

      </fieldset>
    </div>

    <p>
      <input type="submit" value="Modifier" />
      <input type="reset" value="Annuler" />
      Retour : <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>//Javascript si c'est un Article
document.getElementById('mySelect').onchange = function(){
  if(this.value == 'Article'){
    document.getElementById('formbase').style.display = 'none';
    document.getElementById('formcache').style.display = 'block';
  } else {
    document.getElementById('formcache').style.display = 'none';
    document.getElementById('formbase').style.display = 'block';
  }
};
</script>
</html>
