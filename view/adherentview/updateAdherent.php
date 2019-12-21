<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../view/css/form.view.css">
  <title>Modification d'un adhérent</title>
</head>
<body>
  <h1>Modification d'un adhérent</h1>
  <form class="" action="../../controler/tableadherent/updateAdherentValide.ctrl.php?idAdherent=<?=$_GET['idAdherent']?>" method="post">
    <fieldset>
      <legend>Informations basiques</legend>
      <p>
        Nom :<br />
        <input type="text" name="nom" value="<?php echo $nom ?>" />
      </p>
      <p>
        Prénom :<br />
        <input type="text" name="prenom" value="<?php echo $prenom ?>" />
      </p>
      <p>
        Date de naissance :<br />
        <input type="text" name="datenaissance" value="<?php echo $datenaissance ?>" />
      </p>
      <p>
        Adresse :<br />
        <input type="text" name="adresse" value="<?php echo $adresse ?>" />
      </p>
      <p>
        Numéro de téléphone :<br />
        <input type="text" name="telephone" value="<?php echo $telephone ?>" />
      </p>
      <p>
        Email :<br />
        <input type="text" name="mail" value="<?php echo $mail ?>" />
      </p>
      <p>
        Rôle (Supprimer et reajouter l'adhérent pour changer le rôle avec les bonnes données): <br />
        <SELECT name="typerole" size="1" id="mySelect" >
          <?php if ($role == 'coureur') { ?>
            <option value = 'coureur' selected >Coureur</option>
            <option value = 'bureau' hidden>Membre du bureau</option>
            <option value = 'deux' hidden>Les deux</option>
          <?php } ?>
          <?php if ($role == 'bureau') { ?>
            <option value = 'coureur' hidden>Coureur</option>
            <option value = 'bureau' selected>Membre du bureau</option>
            <option value = 'deux' hidden>Les deux</option>
          <?php } ?>
          <?php if ($role == 'deux') { ?>
            <option value = 'coureur' hidden>Coureur</option>
            <option value = 'bureau' hidden>Membre du bureau</option>
            <option value = 'deux' selected>Les deux (Coureur et membre du bureau)</option>
          <?php } ?>
        </SELECT>
      </p>
    </fieldset>

    <div id="formcoureur" style="display:none;">
      <fieldset>
        <legend>Coureur</legend>
        <p>
          Categorie :<br />
          <input type="text" name="categorie" value="<?php echo $categorie ?>" />
        </p>
        <p>
          Numero de licence (si connu) :<br />
          <input type="text" name="numlicence" value="<?php echo $numlicence ?>" />
        </p>
        <p>
          Photo (Pour l'onglet les coureurs) :<br />
          <input type="file" name="urlphoto" value="<?php echo $urlphoto ?>">
        </p>
      </fieldset>
    </div>

    <div id="formbureau" style="display:none;">
      <fieldset>
        <legend>Membre du bureau</legend>
        <p>
          Description du role dans le bureau :<br />
          <input type="text" name="role" value="<?php echo $role ?>" />
        </p>
        <p>
          Photo (Pour l'onglet le bureau) :<br />
          <input type="file" name="urlphotoalt" value="<?php echo $urlphotoalt ?>">
        </p>
      </fieldset>
    </div>

    <p>
       <input type="submit" value="Modifier" />
       <input type="reset" value="Annuler" />
       </p>
       <p>
       Retour : <a id="retour" href="../../controler/tableadherent/tableadherent.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
