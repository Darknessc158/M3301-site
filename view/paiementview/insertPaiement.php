<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Ajout d'un paiement</title>
</head>
<body>


  <!-- Titre du formulaire paiement -->
  <?php if (isset( $_GET['idAdherent'])){
    $id = $_GET['idAdherent'];
    $adh = $adherents->getUnAdherent($id); ?>
    <h1>Ajout d'un paiement pour <?php echo $adh->getPrenom()." ".$adh->getNom();?> </h1>
  <?php }else{ ?>
    <h1>Ajout d'un paiement</h1>
  <?php } ?>
  <!-------------------------------->

  <form class="" action="../../controler/tablepaiement/insertPaiement.ctrl.php<?php if (isset( $_GET['idAdherent'])){ echo "?idAdherent=".$id;}?>" method="post">


    <!--Si l'adherent n'est pas set on affiche la liste des adherents -->
    <?php if (!isset( $_GET['idAdherent'])){ ?>
      <label>Sélectionnez l'adhérent concerné :</label>
      <select name="idAdherent">
        <?php foreach ($lesadh as $unadh) { ?>
          <option value ="<?php echo $unadh->getIdAdherent();?>"><?php echo $unadh->getPrenom()." ".$unadh->getNom();?></option>
        <?php } ?>
      </select></br>
    <?php } ?>
    <!-------------------------------->
    <fieldset>
      <legend>Type du paiement</legend>

    <label for="type">Sélectionnez un type (Licence,adhésion,Article) :</label><br/>
    <SELECT name="type" size="1" id="mySelect" >
      <option value = 'Licence'>Licence</option>
      <option value = 'Adhésion' selected>Adhésion</option>
      <option value = 'Article' >Article</option>
    </SELECT>
        </fieldset>

    <!--Infos essentielles pour l'ajout d'une licence, adhésion -->


      <div id="formbase" style="display:block;">

      <fieldset>

        <legend>Informations adhésion, licence</legend>

        <label for="datePaiement">Date du paiement :</label><br/>
        <input type="date" name="datePaiement" value="" /><br/>

        <label for="prix">Prix :</label><br/>
        <input type="text" name="prix" value="" /><br/>

        <label for="description">Description :</label><br/>
        <input type="text" name="description" value="" /><br/>

        <label for="etatDuPaiement">Etat du paiement :</label><br/>
        <input type="text" name="etatDuPaiement" value="" /><br/>
      </div>


    </fieldset>

    <!--Infos supplémentaires si c'est un Article -->
    <div id="formcache" style="display:none;">
      <fieldset>
        <legend>Informations article</legend>

        <label for="datePaiement">Date du paiement :</label><br/>
        <input type="date" name="datePaiementArticle" value="" /><br/>

        <label for='nomArticle'>Liste des articles disponibles :</label><br/>
        <SELECT name="nomArticle" size="1">
          <?php foreach ($lesArticles as  $unArticle) { ?>
            <option value ="<?php $unArticle->getDescription()?>"><?php echo $unArticle->getDescription()?></option>
          <?php } ?>
        </SELECT><br/>

        <label for="">Quantité commandée :</label><br/>
        <input type="text" name="quantiteCommande" value="" /><br/>

        <label for="etatDuPaiement">Etat du paiement :</label><br/>
        <input type="text" name="etatDuPaiementArticle" value="" /><br/>

      </fieldset>
    </div>

    <p>
      <input type="submit" value="Ajouter" />
      <input type="reset" value="Annuler" />
      Retour : <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php<?php if (isset( $_GET['idAdherent'])){ echo "?idAdherent=".$id;}?>"><i class="fas fa-undo"></i></a>
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
