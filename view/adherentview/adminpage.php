<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->


  <link href="../../view/css/admintable.view.css" rel="stylesheet">
  <link href="../../view/css/main.view.css" rel="stylesheet">
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <script type="text/javascript">
  $(document).ready(function(){
      $('.search-box input[type="text"]').on("keyup input", function(){
          /* Get input value on change */
          var inputVal = $(this).val();
          var resultDropdown = $(this).siblings(".result");
          if(inputVal.length){
              $.get("../../controler/tableadherent/rechercheAdherent.ctrl.php", {term: inputVal}).done(function(data){
                  // Display the returned data in browser
                  resultDropdown.html(data);
              });
          } else{
              resultDropdown.empty();
          }
      });

      // Set search input value on click of result item
      $(document).on("click", ".result p", function(){
          $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
          $(this).parent(".result").empty();
      });
  });
  </script>
</head>

<body>

  <div class="boximg">
    <p class="box">
    <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
    </p>
  </div>

  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="../accueil.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tableadherent/tableadherent.ctrl.php">Gestionnaire des adhérents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablearticle/tablearticle.ctrl.php">Gestionnaire des stocks</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tablepaiement/tableUnPaiement.ctrl.php">Gestionnaire des transactions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/auth/profilAdmin.ctrl.php">Accueil administrateur</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/tableadherent/tableadherent.ctrl.php"><i class="fas fa-sync" title="Rafraîchir"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->

  <h2>Gestion des adhérents</h2>
  <div class="search-box">
      <input type="text" autocomplete="off" placeholder="Search country..." />
      <div class="result"></div>
  <!-- Tableau !-->
  <?php $chemin='../../controler/tableadherent/tableadherent.ctrl.php' ?>
  <div class="elementqsn">
    <table class="table table-bordered table-hover table-light" id="dataTable" width="100%" cellspacing="0">
      <thead class="thead-light">
        <tr> <!-- remplissage auto avec notre bd -->
          <th>
            <div class="boite_titre">
            <p>Nom</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=nomcroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=nomdecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
          </th>

          <th>
            <div class="boite_titre">
              <p>Prénom</p>
              <div class="icones_tri">
                <a href="<?= $chemin ?>?tri=prenomcroit"><i class="fas fa-sort-up"></i></a>
                <a href="<?= $chemin ?>?tri=prenomdecroit"><i class="fas fa-sort-down"></i></a>
              </div>
            </div>
          </th>

          <th>
            <div class="boite_titre">
            <p>Catégorie</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=catecroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=catedecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
          </th>

          <th>
            <div class="boite_titre">
            <p>Date de naissance</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=datenaissancecroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=datenaissancedecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
          </th>

          <th>
            <div class="boite_titre">
            <p>Adresse</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=adressecroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=adressedecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
          </th>

          <th>
            <p>Télephone</p>
          </th>

          <th>
            <p>Email</p>
          </th>

          <th>
            <div class="boite_titre">
            <p>Numéro de licence</p>
            <div class="icones_tri">
              <a href="<?= $chemin ?>?tri=numlicencecroit"><i class="fas fa-sort-up"></i></a>
              <a href="<?= $chemin ?>?tri=numlicencedecroit"><i class="fas fa-sort-down"></i></a>
            </div>
          </div>
          </th>

          <th>
            Actions
          </th>

        </tr>
      </thead>
      <tbody>
        <?php foreach ($resadh as $unAdherent){ ?>
          <tr>
            <td><?=$unAdherent->getNom();?></td>
            <td><?=$unAdherent->getPrenom();?></td>
            <td><?=$unAdherent->getCategorie();?></td>
            <td><?=$unAdherent->getDateNaissance();?></td>
            <td><?=$unAdherent->getAdresse();?></td>
            <td><?=$unAdherent->getTelephone();?></td>
            <td><?=$unAdherent->getMail();?></td>
            <td><?=$unAdherent->getNumLicence();?></td>
            <td>
              <a href="../../controler/tablepaiement/tableUnPaiement.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-shopping-basket" title="Voir les paiements."></i></a>
              <a href="../../controler/tableadherent/updateAdherent.ctrl.php?idAdherent=<?=$unAdherent->getIdAdherent();?>"><i class="fas fa-user-edit" title="Modifier l'adhérent."></i></a>
              <i class="fas fa-user-times" title="Supprimer l'adhérent." style="cursor:pointer; color:red;" onClick="DelAdherent('<?=$unAdherent->getIdAdherent();?>')"></i>
            </td>
          </tr>
        <?php } ?>
        <p>Ajouter un adherent : <a href="../../view/adherentview/insertAdherent.php"> <i class="fas fa-plus-circle"></i> </a></p>

      </tbody>
    </table>
  </div>

  <!-- Fin tableau -->
</body>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!-- Script pour valider supression d'un adhérent -->
<script>
function DelAdherent(id){
  if(confirm("Voulez vous vraiment supprimer cet adhérent ?")){
    window.location='../../controler/tableadherent/tableadherent.ctrl.php?type=delete&idAdherent='+id
  }
}
function ChangeIcon(element){
  var x = element.getElementById("asc");
  var v = x.getAttribute("class");
  if (v == "fas fa-sort-up"){
    v = "fas fa-sort-down";
  }else{
    v = "fas fa-sort-up";
  }
  x.setAttribute("class",v);
}
</script>

</html>
