<!DOCTYPE html>
<html lang="fr">
<head>
  <title>SB Admin - Tables</title>
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
    <a class="navbar-brand mr-1" href="#">SCAL Echirolles</a>
  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <!-- DataTables Example -->
        <div class="card-header">
          <i class="fas fa-table"></i>
          Data Table Example</div>
          <div class="card-body">
            <div class="table-responsive">
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
                  <?php $i=1; $nblignes=2; while ($nblignes > 0){ ?>
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
            </div>
          </div>
        </div>
      </div>
      <!-- /.content-wrapper -->
    </body>
    </html>
