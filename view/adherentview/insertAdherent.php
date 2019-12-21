<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../../view/css/form.view.css">
  <title>Ajout d'un adhérent à l'association</title>
</head>
<body>
  <h1>Ajout d'un adhérent à l'association</h1>
  <form class="" action="../../controler/tableadherent/insertAdherent.ctrl.php" method="post">

    <fieldset>
      <legend>Informations basiques</legend>
      <p>
        Nom :<br />
        <input type="text" name="nom" value="" />
      </p>
      <p>
        Prénom :<br />
        <input type="text" name="prenom" value="" />
      </p>
      <p>
        Date de naissance :<br />
        <input type="date" name="datenaissance" value="" />
      </p>
      <p>
        Adresse :<br />
        <input type="text" name="adresse" value="" />
      </p>
      <p>
        Votre téléphone :<br />
        <input type="text" name="telephone" value="" />
      </p>
      <p>
        Votre email :<br />
        <input type="text" name="mail" value="" />
      </p>
      <p>
        Rôle : <br />
        <SELECT name="typerole" size="1" id="mySelect" >
          <option value="rien" hidden selected >Choisissez le rôle de l'adherent</option>
          <option value = 'coureur'>Coureur</option>
          <option value = 'bureau'>Membre du bureau</option>
          <option value = 'deux' >Les deux</option>
        </SELECT>
      </p>
    </fieldset>

    <div id="formcoureur" style="display:none;">
      <fieldset>
        <legend>Coureur</legend>
        <p>
          Categorie :<br />
          <input type="text" name="categorie" value="" />
        </p>
        <p>
          Numero de licence (si connu) :<br />
          <input type="text" name="numlicence" value="" />
        </p>
        <p>
          Photo (Pour l'onglet les coureurs) :<br />
          <input type="file" name="urlphoto" value="">
        </p>
      </fieldset>
    </div>

    <div id="formbureau" style="display:none;">
      <fieldset>
        <legend>Membre du bureau</legend>
        <p>
          Description du role dans le bureau :<br />
          <input type="text" name="role" value="" />
        </p>
        <p>
          Photo (Pour l'onglet le bureau) :<br />
          <input type="file" name="urlphotoalt" value="">
        </p>
      </fieldset>
    </div>

    <p>
      <input type="submit" value="Ajouter" />
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
  } else if (this.value == 'deux') {
    document.getElementById('formcoureur').style.display = 'block';
    document.getElementById('formbureau').style.display = 'block';
  } else {
    document.getElementById('formcache').style.display = 'none';
    document.getElementById('formbase').style.display = 'none';
  }
};
</script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
</html>
