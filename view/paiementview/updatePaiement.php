<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Modification d'un Paiement</title>
  <link rel="stylesheet" href="../../view/css/form.view.css">
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


  <form class="" action="../../controler/tablepaiement/updatePaiementValide.ctrl.php?idPaiement=<?=$_GET['idPaiement']?>&idAdherent=<?=$_GET['idAdherent']?>&quantite=<?=$quantiteCommande?>" method="post">

    <fieldset>
      <legend>Type du paiement</legend>

      <!--Option à séléctionner en fonction du type deja choisi -->
      <?php $article = 0; ?>
      <label for="type">Type du paiement à modifier : <?php echo $type; ?></label><br/>
      <SELECT name="type" size="1" id="mySelect" hidden >
        <?php if ($type == Licence){?>
          <option value = 'Licence' selected>Licence</option>
          <option value = 'Adhésion' disabled>Adhésion</option>
          <option value = 'Article' disabled>Article</option>
        <?php }else if ($type == Adhésion){?>
          <option value = 'Licence' disabled>Licence</option>
          <option value = 'Adhésion' selected>Adhésion</option>
          <option value = 'Article' disabled>Article</option>
        <?php }else{?>
          <option value = 'Licence' disabled>Licence</option>
          <option value = 'Adhésion' disabled>Adhésion</option>
          <option value = 'Article' selected>Article</option>
          <?php $article=1; } ?>
        </SELECT>

      </fieldset>
      <?php if ($article != 1) { ?>


        <!--Infos essentielles -->
        <div id="formbase">

          <fieldset>

            <legend>Informations <?php echo $type; ?></legend>

            <label for="datePaiement">Date du paiement :</label><br/>
            <input type="date" name="datePaiement" value="<?php echo $datePaiement ?>" /><br/>

            <label for="prix">Prix :</label><br/>
            <input type="text" name="prix" value="<?php echo $prix ?>" /><br/>

            <label for="description">Description :</label><br/>
            <input type="text" name="description" value="<?php echo $description ?>" /><br/>

            <label for="etatDuPaiement">Etat du paiement :</label><br/>
            <input type="text" name="etatDuPaiement" value="<?php echo $etatDuPaiement ?>" /><br/>



          </fieldset>
        </div>

      <?php }else{ ?>

        <!--Infos supplémentaires si c'est un Article -->
        <div id="formaticle">
          <fieldset>
            <legend>Informations article pour <?php echo $description ?></legend>

            <label for="datePaiement">Date du paiement :</label><br/>
            <input type="date" name="datePaiementArticle" value="<?php echo $datePaiement ?>" /><br/>

            <label for="">Quantité commandée :</label><br/>
            <input type="text" name="quantiteCommande" value="<?php echo $quantiteCommande ?>" disabled style="background-color:gray;" title="(Remplir un autre formulaire pour changer la quantité.)"/><br/>

            <label for="etatDuPaiement">Etat du paiement :</label><br/>
            <input type="text" name="etatDuPaiementArticle" value="<?php echo $etatDuPaiement ?>" /><br/>

          </fieldset>
        </div>
      <?php } ?>

      <p>
        <input type="submit" value="Modifier" />
        <input type="reset" value="Annuler" />
        </p>
        <p>
        Retour : <a id="retour" href="../../controler/tablepaiement/tableUnPaiement.ctrl.php<?php if (isset( $_GET['idAdherent'])){ echo "?idAdherent=".$id;}?>"><i class="fas fa-undo"></i></a>
        </p>
    </form>


  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </html>
