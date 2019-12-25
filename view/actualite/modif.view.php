<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <!-- Custom styles for this template-->
    <link href="../../view/css/admintable.view.css" rel="stylesheet">
    <link href="../../view/css/main.view.css" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Modification d'une publication</title>
  </head>
  <body>

    <p>
    Retour : <a id="retour" href="../../controler/auth/profilAdmin.ctrl.php"><i class="fas fa-undo"></i></a>
    </p>

    <h2>Gestion du blog</h2>
    <!-- Tableau !-->
    <div class="elementqsn">
      <table class="table table-bordered table-hover table-light" id="dataTable" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr> <!-- remplissage auto avec notre bd -->
            <th>
              <div class="boite_titre">
              <p>Date de publication</p>
            </div>
            </th>

            <th>
              <div class="boite_titre">
                <p>Titre</p>
              </div>
            </th>

            <th>
              <div class="boite_titre">
              <p>Description</p>
            </div>
            </th>


            <th>
              Actions
            </th>

          </tr>
        </thead>
        <tbody>
          <?php foreach ($lespublications as $publication){ ?>
            <tr>
              <td><?=$publication->getDatePublication();?></td>
              <td><?=$publication->getTitre();?></td>
              <?php $resume = substr($publication->getDescription(),0,40); ?>
              <td><?=$resume;?></td>
              <td>
                <a href="../../controler/actualite/updateavant.ctrl.php?idPublication=<?php echo $publication->getIdPublication(); ?>"><i class="far fa-edit" title="Modifier l'article."></i></a>
                <i class="far fa-trash-alt" title="Supprimer l'article." style="cursor:pointer; color:red;" onClick="DelArticle('<?=$publication->getIdPublication();?>')"></i>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- Fin tableau -->
  </body>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script type="text/javascript">
  function DelArticle(id){
    if(confirm("Voulez vous vraiment supprimer cette publication ?")){
      window.location='../../controler/actualite/del.ctrl.php?idPublication='+id+'&del=true'
    }
  }
  </script>
</html>
