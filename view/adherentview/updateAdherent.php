<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../view/css/form.view.css">
  <title>Modification d'un adhérent</title>
</head>
<body>
  <h1>Modification d'un adhérent</h1>
  <form class="" action="../../controler/tableadherent/updateAdherentValide.ctrl.php?idAdherent=<?=$_GET['idAdherent']?>&typerole=<?=$typerole?>" method="post">
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
            <?php if ($urlphoto == ''){ ?>
              <input type="file" name="urlphoto2">
            <?php }else{ ?>
              <label for="">Souhaitez vous changez la photo ?</label>
              <select id="mySelect1" name="photochange">
                <option value="Non" selected>Non</option>
                <option value="Oui">Oui</option>
              </select>
              <div id="yes1" style="display:none;">
                <input type="file" name="urlphoto2">
              </div>
              <div id="no1" style="display:block;">
                <input type="text" name="urlphoto" value="<?php echo $urlphoto ?>" hidden>
              </div>
            <?php } ?>
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
            <?php if ($urlphotoalt == ''){ ?>
              <input type="file" name="urlphotoalt2" value="<?php echo $urlphotoalt ?>">
            <?php }else{ ?>
              <label for="">Souhaitez vous changez la photo ?</label>
              <select id="mySelect" name="photochange">
                <option value="Non" selected>Non</option>
                <option value="Oui">Oui</option>
              </select>
              <div id="yes" style="display:none;">
                <input type="file" name="urlphotoalt2">
              </div>
              <div id="no" style="display:block;">
                <input type="text" name="urlphotoalt" value="<?php echo $urlphoto ?>" hidden>
              </div>
            <?php } ?>
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
            <?php if ($urlphoto == ''){ ?>
              <input type="file" name="urlphoto2" value="<?php echo $urlphoto ?>">
            <?php }else{ ?>
              <label for="">Souhaitez vous changez la photo ?</label>
              <select id="mySelect" name="photochange">
                <option value="Non" selected>Non</option>
                <option value="Oui">Oui</option>
              </select>
              <div id="yes" style="display:none;">
                <input type="file" name="urlphoto2">
              </div>
              <div id="no" style="display:block;">
                <input type="text" name="urlphoto" value="<?php echo $urlphoto ?>" hidden>
              </div>
            <?php } ?>
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
            <?php if ($urlphotoalt == ''){ ?>
              <input type="file" name="urlphotoalt2" value="<?php echo $urlphotoalt ?>">
            <?php }else{ ?>
              <label for="">Souhaitez vous changez la photo ?</label>
              <select id="mySelect" name="photochange">
                <option value="Non" selected>Non</option>
                <option value="Oui">Oui</option>
              </select>
              <div id="yes" style="display:none;">
                <input type="file" name="urlphotoalt2">
              </div>
              <div id="no" style="display:block;" >
                <input type="text" name="urlphotoalt" value="<?php echo $urlphoto ?>" hidden>
              </div>
            <?php } ?>
          </p>
        </fieldset>
      </div>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
      <input type="text" name="categorie" value="<?php echo $categorie ?>" hidden/>
      <input type="text" name="numlicence" value="<?php echo $numlicence ?>" hidden/>
      <input type="file" name="urlphoto" value="<?php echo $urlphoto ?>" hidden>
      <input type="file" name="urlphoto2" value="<?php echo $urlphoto ?>" hidden>
      <!--On cache ces donnes pour les recevoirs vident sans erreur DAO-->
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
<script>//Javascript pour changer url photo
document.getElementById('mySelect').onchange = function(){
  if(this.value == 'Oui'){
    document.getElementById('yes').style.display = 'block';
    document.getElementById('no').style.display = 'none';
  } else {
    document.getElementById('yes').style.display = 'none';
    document.getElementById('no').style.display = 'block';
  }
};
document.getElementById('mySelect1').onchange = function(){
  if(this.value == 'Oui'){
    document.getElementById('yes1').style.display = 'block';
    document.getElementById('no1').style.display = 'none';
  } else {
    document.getElementById('yes1').style.display = 'none';
    document.getElementById('no1').style.display = 'block';
  }
};
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
