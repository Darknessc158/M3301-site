<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../../view/css/main.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>SCALE Echirolles - club de cyclisme</title>
</head>
<body style="background-color:silver;">

  <div class="boximg" style="margin-bottom:0">
    <p class="box">
      <img class="scroll" src="../../model/data/images/images_sites/accueil_banniere.jpg" alt="" style="display:block; vertical-align:middle;">
      <img class="scroll" src="../../model/data/images/images_sites/fond_banniere.jpg" alt="" style="display:none;">
      <img class="scroll" src="../../model/data/images/images_sites/ob_763433_p1620864.jpg" alt="" style="display:none;">
    </p>
  </div>

  <script type="text/javascript">
  I = 0 ;
  Imax = document.images.length - 1 ;
  setTimeout(suivante, 7000) ;
  function suivante()
  {
    document.images[I].style.display = "none" ;
    if ( I < Imax )
    I++;
    else
    I=0;
    document.images[I].style.display = "block";
    setTimeout(suivante, 7000) ;
  }
  </script>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="display:flex; flex-wrap:wrap;">
    <a class="navbar-brand" href="#"> <img src="../../model/data/images/images_sites/logo-scale.jpg" alt="" width="60%"></a>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="main.view.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="actualites.view.php">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="lebureau.view.php">Le bureau</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controler/lescoureurs.ctrl.php">Les coureurs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="histoireclub.view.php">Histoire du club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.view.php">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../view/page administrateur/admin.view.php">Page administrateur</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="d-flex justify-content-center h-100">
      <div class="card">
        <div class="card-header">
          <h2>Inscription</h2>
        </div>
        <div class="card-body"style="width: 32rem;">

          <form action="../../controler/auth/inscription.ctrl.php" method="post" class="needs-validation" novalidate>
            <small class="help-block text-danger"><?php echo $username_err; ?></small>
            <div class="input-group form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <input type="text" name="username" class="form-control" placeholder ="E-mail" required value="<?php echo $username; ?>">
            </div>

            <small class="help-block text-danger"><?php echo $password_err; ?></small>
            <div class="input-group form-group<?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <input type="password" name="password" class="form-control" required placeholder="Mot de passe(6 carateres minimum)"value="<?php echo $password; ?>">
            </div>

            <small class="help-block text-danger"><?php echo $confirm_password_err; ?></small>
            <div class="input-group form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
              <input type="password" name="confirm_password" class="form-control" placeholder="Confirmer votre mot de passe"value="<?php echo $confirm_password; ?>">
            </div>

            <div class="form-group text-center">
              <input type="submit" class="btn btn-primary" value="Valider">
              <input type="reset" class="btn btn-default" value="Réinitialiser">
            </div>
          </form>
        </div>
        <div class="card-footer">
          <div class="d-flex justify-content-center links">
            <p>Deja inscrit? <a href="login.ctrl.php">S'identifier</a>.</p>
          </div>
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
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName('needs-validation');
      // Loop over them and prevent submission
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
