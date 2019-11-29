<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SCALE Echirolles - club de cyclisme</title>
  <!-- Custom styles for this template-->
  <link href="../view/css/sb-admin.css" rel="stylesheet">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body id="page-top">


  <div class="jumbotron text-center" style="margin-bottom:0">
    <img src="../data/images/accueil_banniere.jpg" alt="">
  </div>
  <!-- NAV DE BASE !-->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="main.view.php"> <img src="../data/images/logo-scale.jpg" alt=""></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lescoureurs.view.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.view.php">Nous contacter</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- NAV DE BASE !-->


  <!-- Tableau !-->
  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
      <tr> <!-- remplissage auto avec notre bd -->
        <th>idadherent</th><!--  nomcolonne de la bd -->
        <th>nom</th>
        <th>prenom</th>
        <th>categorie</th>
        <th>datenaissance</th>
        <th>adresse</th>
        <th>telephone</th>
        <th>mail</th>
        <th>numlicence</th>
      </tr>
    </thead>
    <tbody>
      <?php $i=1; while ($nblignes > 0){ ?>
        <tr>
          <td><?=$adherents->getUnAdherent($i)->getIdAdherent();?></td>
          <td><?=$adherents->getUnAdherent($i)->getNom();?></td>
          <td><?=$adherents->getUnAdherent($i)->getPrenom();?></td>
          <td><?=$adherents->getUnAdherent($i)->getCategorie();?></td>
          <td><?=$adherents->getUnAdherent($i)->getDateNaissance();?></td>
          <td><?=$adherents->getUnAdherent($i)->getAdresse();?></td>
          <td><?=$adherents->getUnAdherent($i)->getTelephone();?></td>
          <td><?=$adherents->getUnAdherent($i)->getMail();?></td>
          <td><?=$adherents->getUnAdherent($i)->getNumLicence();?></td>
        </tr>
        <?php $nblignes--;
        $i++;} ?>
      </tbody>
    </table>
    <!-- Fin tableau -->
  </body>
  </html>
