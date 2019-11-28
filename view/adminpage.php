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
                    <th>Name</th><!-- recuperer nomcolonne avec notre bd -->
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=0; while ($nblignes > 0){ ?>
                  <tr>
                    <td><?=$adherents->getUnAdherent($i)->getNom(); ?></td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
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
