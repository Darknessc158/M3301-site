<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="../../view/css/admintable.view.css" rel="stylesheet">
    <link href="../../view/css/main.view.css" rel="stylesheet">
    <title>Modification d'une publication</title>
  </head>
  <body>
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
              <td><?=$publication->getDescription();?></td>
              <td>
                <a href="#"><i class="fas fa-user-edit" title="Modifier l'article."></i></a>
                <i class="fas fa-user-times" title="Supprimer l'article." style="cursor:pointer; color:red;" onClick="DelArticle('<?=$publication->getIdPublication();?>')"></i>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>

    <!-- Fin tableau -->
  </body>
  <script type="text/javascript">
  function DelArticle(id){
    if(confirm("Voulez vous vraiment supprimer cette publication ?")){
      window.location='#'+id
    }
  }
  </script>
</html>
