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
        Date de naissance (JJ/MM/AAAA) :<br />
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
          <?php if ($typerole == 'coureur') { ?>
            <option value = 'coureur' selected>Coureur</option>
            <option value = 'bureau' hidden>Membre du bureau</option>
            <option value = 'deux' hidden>Les deux</option>
        <?php } elseif ($typerole == 'bureau') { ?>
            <option value = 'coureur' hidden>Coureur</option>
            <option value = 'bureau' selected>Membre du bureau</option>
            <option value = 'deux' hidden>Les deux</option>
          <?php} elseif ($typerole == 'deux') { ?>
            <option value = 'coureur' hidden>Coureur</option>
            <option value = 'bureau' hidden>Membre du bureau</option>
            <option value = 'deux' selected>Les deux (Coureur et membre du bureau)</option>
          <?php } else { ?>
            <option value="rien" hidden selected >Choisissez le rôle de l'adherent</option>
            <option value = 'coureur'>Coureur</option>
            <option value = 'bureau'>Membre du bureau</option>
            <option value = 'deux' >Les deux</option>
            <?php } ?>
        </SELECT>
      </p>
    </fieldset>
    <?php if ($typerole=='deux') { ?>
      <div id="formcoureur">
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
            <input type="text" name="urlphoto" value="<?php echo $urlphoto ?>">
          </p>
        </fieldset>
      </div>
      <div id="formbureau">
        <fieldset>
          <legend>Membre du bureau</legend>
          <p>
            Description du role dans le bureau :<br />
            <input type="text" name="role" value="<?php echo $role ?>" />
          </p>
          <p>
            Photo (Pour l'onglet le bureau) :<br />
            <input type="text" name="urlphotoalt" value="<?php echo $urlphotoalt ?>">
          </p>
        </fieldset>
      </div>
  <?php } elseif ($typerole=='coureur') { ?>
      <div id="formcoureur">
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
            <input type="text" name="urlphoto" value="<?php echo $urlphoto ?>">
          </p>
        </fieldset>
      </div>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
      <input type="text" name="role" value="<?php echo $role ?>" hidden/>
      <input type="file" name="urlphotoalt" value="<?php echo $urlphotoalt ?>" hidden>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
  <?php } elseif ($typerole=='bureau') { ?>
      <div id="formbureau">
        <fieldset>
          <legend>Membre du bureau</legend>
          <p>
            Description du role dans le bureau :<br />
            <input type="text" name="role" value="<?php echo $role ?>" />
          </p>
          <p>
            Photo (Pour l'onglet le bureau) :<br />
            <input type="text" name="urlphotoalt" value="<?php echo $urlphotoalt ?>">
          </p>
        </fieldset>
      </div>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
      <input type="text" name="categorie" value="<?php echo $categorie ?>" hidden/>
      <input type="text" name="numlicence" value="<?php echo $numlicence ?>" hidden/>
      <input type="file" name="urlphoto" value="<?php echo $urlphoto ?>" hidden>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
    <?php }else{ ?>
      <div id="formcoureur"  style="display:none;">
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
    <?php } ?>

    <p>
      <input type="submit" value="Modifier" />
      <input type="reset" value="Annuler" />
    </p>
    <p>
      Retour : <a id="retour" href="../../controler/tableadherent/tableadherent.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>
  </form>


</body>
<script>//Javascript si c'est un Article
document.getElementById('mySelect').onchange = function(){
  if(this.value == 'coureur'){
    document.getElementById('formcoureur').style.display = 'block';
    document.getElementById('formbureau').style.display = 'none';
  } else if (this.value == 'bureau') {
    document.getElementById('formcoureur').style.display = 'none';
    document.getElementById('formbureau').style.display = 'block';
    <?php $typerole = 'bureau'; ?>
  } else if (this.value == 'deux') {
    document.getElementById('formcoureur').style.display = 'block';
    document.getElementById('formbureau').style.display = 'block';
    <?php $typerole = 'deux'; ?>
  } else {
    document.getElementById('formcache').style.display = 'none';
    document.getElementById('formbase').style.display = 'none';
  }
};
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
