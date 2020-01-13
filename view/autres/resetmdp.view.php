<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/main.view.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body>

  <header>
    <!--Image bandeau haut-->
    <div class="boximg">
      <p class="box">
        <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
        <img class="scroll" src="../../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
        <img class="scroll" src="../../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
      </p>
    </div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <button class="navbar-toggler" data-toggle = "collapse" data-target = "#collapse_target">
      <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapse_target">
  <a class="navbar-brand" href="../../controler/accueil.ctrl.php"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="logo scale Echirolles" width="60%"></a>


    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../controler/accueil.ctrl.php">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/actualite/touteslesactualites.ctrl.php">Actualités</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/lebureau.ctrl.php">Le bureau</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/lescoureurs.ctrl.php">Les coureurs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../controler/tablehistoireclub/tablehistoireclub.ctrl.php">Histoire du club</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../../view/autres/contact.view.php">Nous contacter</a>
      </li>
    </ul>
    
  </div>

</nav>
<!--Nav-->
</header>
<!--Fin header-->

  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
            <h2>Réinitialiser le mot de passe</h2>
        </div>
        <div class="card-body"style="width: 32rem;">

          <form action="../../controler/auth/resetmdp.ctrl.php" method="post" class="needs-validation" novalidate>
            <small class="help-block text-danger"><?php echo $new_password_err; ?></small>
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="new_password" class="form-control" required placeholder="nouveau mot de passe(6 caratères minimum)"value="<?php echo $new_password; ?>">
            </div>

            <small class="help-block text-danger"><?php echo $confirm_password_err; ?></small>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <input type="password" name="confirm_password" class="form-control" placeholder="Confirmer votre mot de passe"value="<?php echo $confirm_password; ?>">
            </div>

            <div class="form-group text-center">
              <input type="submit" class="btn btn-primary" value="Valider">
              <a class="btn btn-link" href="../../controler/auth/login.ctrl.php">Annuler</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script>(function() {
    'use strict';
    window.addEventListener('load', function() {
      var forms = document.getElementsByClassName('needs-validation');
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();
</script>
</body>
</html>
